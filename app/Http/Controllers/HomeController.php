<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	
    public function __construct()
    {
        // $this->middleware('auth');
    }

	
    public function home()
	{
		return View('dashboard');
	}
	
    public function map($no)
	{
		return View('map'.$no);
	}
	
	public function banjir()
	{
		return View('bencana.banjir.index');
	}
	
	public function longsor()
	{
		return View('bencana.longsor.index');
	}
	
	public function lingkungan()
	{
		return View('penduduk.lingkungan.index');
	}
	
	public function cctvHome()
	{
		return View('cctv.cctv-home');
	}
	
}
