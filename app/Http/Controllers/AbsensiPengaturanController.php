<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiPengaturanController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
	
	public function pengaturanJabatan()
	{
		$jabatan = \App\AbsensiJabatan::all();
		return View('absensi.pengaturan.jabatan', compact('jabatan'));
	}
	
	public function pengaturanDepartemen()
	{
		$departemen = \App\AbsensiDepartemen::all();
		$departemensub = \App\AbsensiDepartemensub::all();
		return View('absensi.pengaturan.departemen', compact('departemen', 'departemensub'));
	}
	
	public function setupIP()
	{
		if(Request::ajax()){
			try {
                $input = Input::all();
                
                $j = json_encode($input);
                $x = json_decode($j);
                
				// print_r($j);
                $ip		= $x->data[0]->ip;
                $key	= $x->data[0]->key;
                
				$setup	= Setup::find(1);
				if ($ip!=""){ $setup->ipmesin = $ip; }
				if ($key!=""){ $setup->key = $key; }
				$setup->save();               
               
				return "ok";
            } catch (Exception $ex) {
				return $ex;
            }
        }
	}
	
	public function setupPeriode()
	{
		if(Request::ajax()){
			try {
                // $input = Input::all();
                
                // $j = json_encode($input);
                // $x = json_decode($j);
                
				// print_r($j);
                // $tgl1	= $x->data[0]->tgl1;
                // $tgl2	= $x->data[0]->tgl2;
                
				// $setup	= Setup::find(1);
				// $setup->absenperiod1	= $tgl1;
				// $setup->absenperiod2	= $tgl2;
				// $setup->save();               
               
				return "ok";
            } catch (Exception $ex) {
				return "gagal";
            }              
        }
	}
}
