<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

use App\Campmapping;
use App\Member;
use App\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('members.diet');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $campid = Campmapping::latest()->value('id');

        $food = new Food;
        $food->camp_id = $campid;
        $food->member_id = $request->id;
        $food->food = $request->food;
        $food->save();

        return redirect(action('MembersController@show', $request->id));

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
        //
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

    public function getFoodlist(request $request)
    {
        if ($request->ajax()) {

        $camp = Campmapping::latest()->value('id');

          $members = Food::where('camp_id',$camp)->with('member')->get();

         return DataTables::of($members)
            ->addColumn('flightname', function($row){
                return $row->member->membermap->flight->flight_name;
               })
            ->addColumn('unitname', function($row){
                 return $row->member->unitmap->unit;
             })
            ->make(true);
        }
    }
}
