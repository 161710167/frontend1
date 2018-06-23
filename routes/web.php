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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/cek',function(){
	return view('layouts.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function (){
	//isi route disini

Route::resource('user','UserController');
Route::resource('kategori','KategoriLowonganController');
//Route::resource('member','MemberController');
Route::resource('perusahaan','PerusahaanController');
Route::resource('lowongan','LowonganController');
//Route::resource('lamaran','LamaranController');
Route::resource('pelamar','PelamarController');

});
Route::get('/', 'FrontendController@index');
Route::get('/rincianlowongan/{id}', 'FrontendController@bacalengkap');
Route::get('/lowongan', 'FrontendController@daftarlowongan');


