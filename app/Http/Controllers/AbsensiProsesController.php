<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiProsesController extends Controller
{
    
	public function uploadAbsensi()
	{
		$setup = \App\AbsensiSetup::find(1);
		$outlet = Auth::user()->outlet;
		
		return View('absensi.absen.upload', compact('setup', 'outlet'));
	}

}
