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
      $next = false;
      $join = JadwalPendakian::join('gunungs', 'jadwal_pendakians.gunung_id', '=', 'gunungs.id')->distinct()->orderBy('nama_gunung')->get();
      // dd($join);
        return view('welcome', compact(['join', 'next']));
    }

    public function next(Request $req)
    {
      // dd($req);
      $next = true;
      $join = $req->nama_gunung;
      $tgl = JadwalPendakian::select('tanggal')->join('gunungs', 'jadwal_pendakians.gunung_id', '=', 'gunungs.id')->where('gunungs.nama_gunung', $req->nama_gunung)->get();
      // $join = JadwalPendakian::join('gunungs', 'jadwal_pendakians.gunung_id', '=', 'gunungs.id')where->get();
      // dd($tgl);

      return view('welcome', compact(['tgl', 'next', 'join']));
   }
   public function cari()
   {
      return redirect()->back();
   }
}
