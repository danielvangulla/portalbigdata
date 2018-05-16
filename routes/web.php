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

route::get('/absensi', 'HomeController@absensi');