<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

use Hut;
use Campmapping;
use Member_mapping;

class HutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get All Huts, group results by Cabin Name
        $huts = Hut::OrberBy('room_number')->groupBy('cabin_name')->get();



        return view('huts.index', compact('huts'));
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

    // This function is an Ajax request for the Huts Datatable list
    public function gethutlisting(Request $request)
    {
        if($request->ajax()){

            $campid = Campmapping::latest()->value('id');

            $huts = Huts::all();

            return DataTables::of($huts)->with(mapping)->get();
            ->addColumn('count', function ($row){
                return $row->mapping->count('id');
            })
            ->make(true);

        }

    }
}
