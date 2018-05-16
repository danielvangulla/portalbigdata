<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Illuminate\Http\Request;

class AbsensiKaryawanController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
	
    public function index()
    {
		$karyawan = \App\AbsensiKaryawan::all();
		$outlet = [1=>"Big Data"];
        return View('absensi.karyawan.index', compact('karyawan','outlet'));
    }

    public function create()
    {
		$departemen = \App\AbsensiDepartemen::pluck('keterangan','id');
		$departemensub = \App\AbsensiDepartemensub::pluck('keterangan','id');
		$jabatan = \App\AbsensiJabatan::pluck('keterangan','id');
		$groupgaji = \App\AbsensiGroupgaji::pluck('keterangan','id');
		$outlet	= \App\AbsensiKaryawan::outlet();
        return View('absensi.karyawan.create', compact('jabatan','outlet','departemen','departemensub','groupgaji'));
    }

    public function store(Request $request)
    {
		$rules = array(
			'idmesin' => 'required|unique:absensi_karyawans',
			'tgllahir' => 'required',
			'alamat' => 'required',
			'tlp' => 'required',
			'email' => 'required',
			'ktp' => 'required',
			'tglmasuk' => 'required',
			'nama' => 'required'
		);
		
		$validator = Validator::make(Input::all(),$rules);
		
		if ($validator->fails()) {
			return Redirect::to('/absensi/karyawan/create')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$karyawan = new \App\AbsensiKaryawan;
			$karyawan -> idmesin 			= Input::get('idmesin');
			$karyawan -> outlet 			= Input::get('outlet');
			$karyawan -> nama 				= Input::get('nama');
			$karyawan -> lahir 				= Input::get('lahir');
			$karyawan -> tgllahir 			= Input::get('tgllahir');
			$karyawan -> alamat 			= Input::get('alamat');
			$karyawan -> tlp 				= Input::get('tlp');
			$karyawan -> email 				= Input::get('email');
			$karyawan -> ktp 				= Input::get('ktp');
			$karyawan -> agama 				= Input::get('agama');
			$karyawan -> kelamin 			= Input::get('kelamin');
			$karyawan -> stat_kawin 		= Input::get('stat_kawin');
			$karyawan -> tglmasuk 			= Input::get('tglmasuk');
			$karyawan -> departemen_id 		= Input::get('departemen_id');
			$karyawan -> departemensub_id	= Input::get('departemensub_id');
			$karyawan -> jabatan_id 		= Input::get('jabatan_id');
			$karyawan -> groupgaji_id 		= Input::get('groupgaji_id');
			$karyawan -> save();
			
			Session::flash('message','Data berhasil disimpan..');
			return Redirect::to('/absensi/karyawan');
		}
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
	
}
