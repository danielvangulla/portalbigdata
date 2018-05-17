<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', 'HomeController@home');
route::get('/map/{no}', 'HomeController@map');

route::get('/bencana/banjir', 'HomeController@banjir');
route::get('/bencana/longsor', 'HomeController@longsor');
route::get('/penduduk/lingkungan', 'HomeController@lingkungan');


route::get('/cctv/home', 'HomeController@cctvHome');


Auth::routes();
Route::prefix('absensi')->group(function () {

	route::get('/', 'AbsensiController@index');

	route::get('/pengaturan-jabatan', 'AbsensiPengaturanController@pengaturanJabatan');
	route::get('/pengaturan-departemen', 'AbsensiPengaturanController@pengaturanDepartemen');
	route::post('/setupPeriode', 'AbsensiPengaturanController@setupPeriode');
	route::post('/setupIP', 'AbsensiPengaturanController@setupIP');

	route::resource('/karyawan', 'AbsensiKaryawanController');
	route::resource('/komponen-penghasilan', 'AbsensiKomponenGajiController');

	Route::resource('group-penghasilan','AbsensiGroupGajiController');
	Route::post('group-detail/store','AbsensiGroupGajiController@storeDetail');

	route::get('/libur', 'AbsensiLiburController@index');
	route::post('/libur-save', 'AbsensiLiburController@save');
	route::get('/libur-hapus/{id}', 'AbsensiLiburController@hapus');

	route::get('/upload-absensi', 'AbsensiProsesController@uploadAbsensi');
	route::post('/upload-absensi-file', 'AbsensiProsesController@uploadFile');

	route::get('/laporan-kehadiran-filter', 'AbsensiLaporanController@laporanKehadiranFilter');
	route::get('/laporan-kehadiran-hasil', 'AbsensiLaporanController@laporanKehadiranHasil');

});
