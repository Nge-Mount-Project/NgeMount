<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalPendakian;

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
      $join = JadwalPendakian::join('gunungs', 'jadwal_pendakians.gunung_id', '=', 'gunungs.id')->distinct()->orderBy('nama_gunung')->get();
      // dd($join);
        return view('welcome', compact('join'));
    }
}
