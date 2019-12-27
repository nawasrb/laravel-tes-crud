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

Route::get('/', function () {
	return view('welcome');
});

//login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
Route::get('/dashboard','DashboardController@index');

// Nasabah
Route::get('/nasabah','NasabahController@index');
Route::get('/nasabah/form','NasabahController@form');
Route::post('/nasabah/create','NasabahController@create');
Route::get('/nasabah/{id_nasabah}/edit','NasabahController@edit');
Route::post('/nasabah/{id_nasabah}/update','NasabahController@update');
Route::get('/nasabah/{id_nasabah}/delete','NasabahController@delete');
Route::get('/nasabah/cetak_nasabah', 'NasabahController@cetak_nasabah');

// Ahli Waris
Route::get('/waris','WarisController@index');
Route::get('/waris/form','WarisController@form');
Route::post('/waris/create','WarisController@create');
Route::get('/waris/{id_ahliwaris}/edit','WarisController@edit');
Route::post('/waris/{id_ahliwaris}/update','WarisController@update');
Route::get('/waris/{id_ahliwaris}/delete','WarisController@delete');

// Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/form','PegawaiController@form');
Route::post('/pegawai/create','PegawaiController@create');
Route::get('/pegawai/{id_pegawai}/edit','PegawaiController@edit');
Route::post('/pegawai/{id_pegawai}/update','PegawaiController@update');
Route::get('/pegawai/{id_pegawai}/delete','PegawaiController@delete');

// User 
Route::get('/user','UserController@index');
Route::get('/user/form','UserController@form');
Route::post('/user/create','UserController@create');
Route::get('/user/{id}/edit','UserController@edit');
Route::post('/user/{id}/update','UserController@update');
Route::get('/user/{id}/delete','UserController@delete');

// Rekening
Route::get('/rekening','RekeningController@index');
Route::get('/rekening/form','RekeningController@form');
Route::post('/rekening/create','RekeningController@create');
Route::get('/rekening/{id}/edit','RekeningController@edit');
Route::post('/rekening/{id}/update','RekeningController@update');
Route::get('/rekening/{id}/delete','RekeningController@delete');


// Transaksi
Route::get('/transaksi','TransaksiController@index');
Route::get('/transaksi/form','TransaksiController@form');
Route::post('/transaksi/create','TransaksiController@create');
Route::get('/transaksi/cetak_pdf', 'TransaksiController@cetak_pdf');
Route::get('/transaksi/cetak_transaksi', 'TransaksiController@cetak_transaksi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
