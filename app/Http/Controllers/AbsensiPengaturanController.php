<?php

namespace App\Http\Controllers;

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
	
}
