<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Member;


use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registered = Member::all();
        $incamp = Member::where('checked_in', 'Y')->get();

        if ($registered->count() == 0) {
            $pencentage = 0;
        } else {
            $pencentage = (($incamp->count())/($registered->count()))*100;
        }

        return view('home', compact('registered', 'incamp', 'pencentage'));
    }
}
