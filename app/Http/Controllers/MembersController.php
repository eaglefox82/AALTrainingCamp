<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Alert;
use DataTables;
use Carbon\Carbon;

use App\Member;
use App\Unit;
use App\Campmapping;





class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $squadron = Unit::all();

       return view('members.index', compact('squadron'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $rank = Rankmapping::orderBy('id', 'desc')->get();

        return view('members.add',compact('rank'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

     $validateData  = Validator::make($request->all(), [
         'membership' => 'required',
         'firstname' => 'required',
         'lastname' => 'required',
         'rank' => 'required',
         'doj' => 'required',
         'dob' => 'required',
         'type' => 'required',
     ]);

     if ($validateData->fails())
     {
         return Redirect::back()->withErrors($validateData)->withInput();
     }

        //Create Member
       /* if(Carbon::parse(date('Y-m-d',strtotime($request->get('dob'))))->DiffInYears(Carbon::now())<12)  {

            $rank = 20;
        }
        else{

            $rank = 19;
        } */

        $e = new Member();
        $e->membership_number = $request->get('membership');
        $e->first_name = $request->get('firstname');
        $e->last_name = $request->get('lastname');
        $e->rank = $request->get('rank');
        $e->date_joined = Carbon::parse($request->get('doj'));
        $e->date_birth = Carbon::parse($request->get('dob'));
        $e->member_type = $request->get('type');
        $e->active= "Y";
        $e->flight=0;
        $e->join_month = Carbon::parse($request->get('doj'))->month;
        $e->join_year = Carbon::parse($request->get('doj'))->year;
        $e->save();

        //Add member to current event rolls
        $memberid = Member::latest()->value('id');
        $events = Events::where('finished', '=', 'N')->get();

        foreach ($events as $r)
        {
            $e = New Eventroll;
            $e->event_id = $r->id;
            $e->member_id = $memberid;
            $e->status = 'N';
            $e->form17 = 'N';
            $e->paid = 'N';
            $e->save();
        }

        Alert()->success('New Member Added', 'New member has been created')->autoclose(2000);
        return redirect(action('MembersController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $squadron = Unit::all();

       $member = Member::find($id);

       if ($member !=null)
       {

        return view('members.show', compact('squadron'));
      }

      return redirect(action('MembersController@index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $member = Member::find($id);
        $rank = Rankmapping::orderBy('id','desc')->get();

        if ($member != null)
        {
            return view('members.edit', compact('member', 'rank'));
        }
        return redirect(action('MembersController@index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validateData = Validator::make($request->all(), [
            'membernumber' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'rank' => 'required',
            'type' => 'required',
        ]);

        if ($validateData->fails())
        {
            return Redirect::back()->withErrors($validateData)->withInput();
        }

        $member = Member::find($id);
        $member->membership_number = $request->get('membernumber');
        $member->first_name = $request->get('firstname');
        $member->last_name = $request->get('lastname');
        $member->Member_type = $request->get('type');
        $member->rank = $request->get('rank');
        $member->flight = $request->get('flight');
        $member->date_joined = Carbon::parse($request->get('doj'));
        $member->date_birth = Carbon::parse($request->get('dob'));
        $member->save();

        alert()->success('Member Updated', 'Members New Details have been recored')->autoclose(1500);
        return redirect(action('MembersController@show', $request->get('member')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function inactive($id)
    {
        //
        $member = Member::find($id);

        if ($member != null)
        {
            // Set Member to Inactive in member table
            $member->active = "N";
            $member->save();

            // Find all Contacts for member and set to inactive
            $conatcts = Contact::where('member_id', $id)->get();
            foreach ($conatcts as $c)
            {
                $c->active = "N";
                $c->save();
            }

            alert()->success('Complete', 'Member has been made inactive')->autoclose(1500);
            return redirect(action('MembersController@index', $member->id));
        }
    }



    public function getMemberlist(Request $request)
    {
       if ($request->ajax()) {

        $camp = Campmapping::latest()->value('id');

          $members=Member::where('camp_id',$camp)->with('unitmap', 'membermap')->get();

            return DataTables::of($members)
                ->addColumn('flightname', function($row){
                    return $row->membermap->flight->flight_name;
                })
                ->addColumn('hutname', function($row){
                    return $row->membermap->room->name;
                })
                ->addColumn('roomnumber', function($row){
                    return $row->membermap->room->number;
                })

                ->addColumn('action', function($row){

                    $btn = '<a href="'.action('MembersController@show', $row->id).'" target="_blank" title="View" class="btn btn-round btn-success"><i class="fa fa-info"></i></a>';

                    return $btn;
                })



            ->make(true);
        }
    }


    public function memberCheckIn($id)
    {
        $member = Member::find($id);
        $member->checkin = 'Y';
        $member->save();

        alert()->success('Complete', 'Member has been checked in')->autoclose(1500);
        return redirect(action('MembersController@show', $id));
    }



}
