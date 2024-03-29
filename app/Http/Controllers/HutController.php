<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

use App\Huts;
use App\Campmapping;
use App\Membermapping;

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
        $huts = Huts::all();

        $huts = $huts->groupBy('name');



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
        $campid = Campmapping::latest()->value('id');

        $hutmembers = Membermapping::where('hut_id', $id)->where('Camp_id', $campid)->get();

        return view('huts.show', compact('hutmembers'));

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
    public function gethutlist(Request $request)
    {
        if($request->ajax()){

            $campid = Campmapping::latest()->value('id');

            $huts = Huts::all();

            return DataTables::of($huts)
            ->addColumn('count', function ($row){
               return $row->mapping->count('hut_id');
            })

            ->addColumn('action', function ($row) {
                return '<a href="'.action('HutController@show', $row->id).'" class="btn btn-success btn-sm"><i class="fa fa-info"></i></a>';
            })
            ->make(true);

        }
    }

}




