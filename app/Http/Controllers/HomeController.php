<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function admin()
    {
        return view('content.dashboard');
    }

    public function casemaster()
    {
        $casemaster = \App\CaseModel::all();

        return view('content.casemaster',compact('casemaster'));
    }

    public function receiving()
    {
        $receiving = \App\CaseModel::where('status','1')->get();

        return view('content.receiving',compact('receiving'));
    }

    public function inprogres()
    {
        $inprogres = \App\CaseModel::where('status','2')->get();

        return view('content.inprogres',compact('inprogres'));
    }

    public function picking()
    {
        $picking = \App\CaseModel::where('status','3')->get();

        return view('content.picking',compact('picking'));
    }
}
