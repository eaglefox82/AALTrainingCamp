<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use PDF;

Use App\Flights;
Use App\Campmapping;
Use App\Membermapping;
use App\Huts;
use App\Medical;
use App\Food;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('reports.report');
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

    public function RollCall()
    {

        $campid = Campmapping::latest()->value('id');
        $flights = Membermapping::where('camp_id', $campid)->get();
        $names = Flights::where('camp_id', $campid)->get();

        $pdf = PDF::loadView('reports.rollcall', compact('flights', 'names'));

        return $pdf->download('rollcall.pdf');
        //return view('reports.rollcall', compact('flights', 'names'));


    }

    public function RoomRoll()
    {
        $campid = Campmapping::latest()->value('id');
        $rooms = Membermapping::where('camp_id', $campid)->get();
        $huts = Huts::all();

        $pdf = PDF::loadView('reports.RoomCall', compact('rooms', 'huts'));

        return $pdf->download('RoomCall.pdf');
        //return view('reports.RoomCall', compact('rooms','huts'));
    }

    public function MedicalList()
    {
        $campid = Campmapping::latest()->value('id');
        $medical = Medical::where('camp_id', $campid)->get();

        $pdf = PDF::loadView('reports.medical', compact('medical'));

        //return $pdf->download('MedicalList.pdf');
        return view('reports.medical', compact('medical'));
    }


    public function DietList()
    {
        $campid = Campmapping::latest()->value('id');
        $diet = Food::where('camp_id', $campid)->get();

        $pdf = PDF::loadView('reports.diet', compact('diet'));

        //return $pdf->download('DietList.pdf');
        return view('reports.RoomCall', compact('medical'));
    }
}
