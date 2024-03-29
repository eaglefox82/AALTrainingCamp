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
use App\Flights;
use App\Membermapping;
use App\Note;
use App\Huts;
use App\Medical;
use App\Food;






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

       $unit = Unit::orderBy('unit', 'asc')->get();
       $flight = Flights::all();

        return view('members.add',compact('unit', 'flight'));
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
         'squadron' => 'required',
         'band' => 'required',
         'gender' => 'required',
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

        $campid = Campmapping::latest()->value('id');

        $e = new Member();
        $e->camp_id = $campid;
        $e->membership = $request->get('membership');
        $e->first_name = $request->get('firstname');
        $e->last_name = $request->get('lastname');
        $e->rank = $request->get('rank');
        $e->unit_id = $request->get('squadron');
        $e->band = $request->get('band');
        $e->gender = $request->get('gender');
        $e->single_day = $request->get('singleday');
        $e->save();

        Alert::success('Success', 'Member Added');
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

       $note = Note::where('member_id', $id)->get();

       $medical = Medical::where('member_id', $id)->get();

       $diet = Food::where('member_id', $id)->get();





       if($member->membermap != null)
        {

            $flight = $member->membermap->flight->flight_name;
            $hut = $member->membermap->room->name;
            $room = $member->membermap->room->number;

        }    else {
            $flight = 'N/A';
            $hut = 'N/A';
            $room = 'N/A';
        }

       if ($member !=null)
       {

        return view('members.show', compact('squadron', 'member', 'flight', 'hut', 'room', 'note', 'medical', 'diet'));
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

    }

    public function getMedicallist(Request $request)
    {
        if ($request->ajax()) {

            $camp = Campmapping::latest()->value('id');
            $medical = Medical::where('camp_id', $camp)->get();

            return DataTables::of($medical)
                ->addColumn('membership', function ($row) {
                    return $row->member->membership;
                })

                ->addColumn('first_name', function($row) {
                    return $row->member->first_name;
                })
                ->addColumn('last_name', function($row) {
                    return $row->member->last_name;
                })
                ->make(true);
        }
    }


    // This function is an Ajax request for the Member Datatable list
    public function getMemberlist(Request $request)
    {
       if ($request->ajax()) {

        $camp = Campmapping::latest()->value('id');

          $members=Member::where('camp_id',$camp)->with('unitmap', 'membermap')->get();

            return DataTables::of($members)
                ->addColumn('flightname', function($row){

                    $flight = !empty($row->membermap->flight_id) ? $row->membermap->flight->flight_name : 'N/A';
                    return $flight;
                })

                ->addColumn('hutname', function($row){
                    $hut = !empty($row->membermap->room->name) ? $row->membermap->room->name : 'N/A';
                    return $hut;
                })
                ->addColumn('roomnumber', function($row){
                    $room = !empty($row->membermap->room->number) ? $row->membermap->room->number : 'N/A';
                    return $room;
                })
                ->addColumn('checkedin', function($row){
                    if ($row->checked_in =="Y")
                    {
                        return "Yes";
                    } else {
                        return "No";
                    }
                })
                ->addColumn('single_day', function($row){
                    if ($row->single_day =="Y")
                    {
                        return "Yes";
                    } else {
                        return "No";
                    }
                })

                ->addColumn('coy', function($row){
                    if ($row->COY =="Y")
                    {
                        return "Yes";
                    } else {
                        return "No";
                    }
                })

                ->addColumn('action', function($row){

                    $btn1 = '<a href="'.action('MembersController@show', $row->id).'" target="_blank" title="View" class="btn btn-round btn-success"><i class="fa fa-info"></i></a>';
                    $btn2 = '<a href="'.action('MembersController@memberCheckIn', $row->id).'" title="Check In" class="btn btn-round btn-primary"><i class="fa fa-check-square-o"></i></a>';

                         if ($row->checked_in == 'Y')
                        {
                            return $btn1;
                        } else {
                            return $btn1 . $btn2;
                        }
                })



            ->make(true);
        }
    }

    public function memberCheckIn($id)
    {
        $member=member::find($id);

        return view ('members.checkin',compact('member'));
    }

    public function completeCheckIn(Request $request,$id)
    {
        $member = Member::find($id);
        $member->form17 = $request->get('form17');
        $member->checked_in = 'Y';

        $member->save();

        Alert::success('Complete', 'Member has been checked in')->autoclose(1500);
        return redirect(action('MembersController@index'));
    }

    public function addNote($id)
    {
        $member = Member::find($id);
        return view ('members.note', compact('member'));
    }

    public function addMemberNote(Request $request, $id)
    {
        $campid = Campmapping::latest()->value('id');

        $e = New Note();
        $e->camp_id = $campid;
        $e->member_id = $id;
        $e->note = $request->get('note');
        $e->save();

        return redirect(action('MembersController@show', $id));
    }

    public function addMedical($id)
    {
        $member = Member::find($id);
        return view ('members.addmedical', compact('member'));
    }

    public function addDiet($id)
    {
        $member = Member::find($id);
        return view ('members.adddiet', compact('member'));
    }

    public function assignMember($id)
    {
        $campid = Campmapping::latest()->value('id');
        $member = Member::find($id);
        $hut = Huts::all();
        $flight = Flights::where('camp_id', $campid)->get();

        return view ('members.assign', compact('member', 'hut', 'flight'));

    }

    public function completeAssignMember(Request $request)
    {
        $campid = Campmapping::latest()->value('id');

        $mapping = new Membermapping();
        $mapping->camp_id = $campid;
        $mapping->member_id = $request->get('id');
        $mapping->flight_id = $request->get('flight');
        $mapping->hut_id = $request->get('hut');
        $mapping->save();

        return redirect(action('MembersController@show', $request->get('id')));
    }

    public function addMemberMedical(Request $request, $id)
    {
        $campid = Campmapping::latest()->value('id');

        $e = New Medical();
        $e->camp_id = $campid;
        $e->member_id = $id;
        $e->condition = $request->get('condition');
        $e->notes = $request->get('notes');
        $e->save();

        return redirect(action('MembersController@show', $id));
    }

    public function addMemberDiet(Request $request, $id)
    {
        $campid = Campmapping::latest()->value('id');

        $e = New Food();
        $e->camp_id = $campid;
        $e->member_id = $id;
        $e->food = $request->get('food');
        $e->save();

        return redirect(action('MembersController@show', $id));
    }

    public function Medical()
    {
        return view ('members.medical');
    }









}
