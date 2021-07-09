<?php

use Illuminate\Support\Facades\Route;

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
    return view('/login');
});

Route::get('/dashboard', 'DashboardController@index');
//barang
Route::get('/barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@tambah');
Route::post('/barang/simpan', 'BarangController@simpan');
Route::get('/barang/hapus/{id_brg}', 'BarangController@hapus');
Route::get('/barang/edit/{id_brg}', 'BarangController@edit');
Route::post('/barang/update', 'BarangController@update');
//jual
Route::get('/jual', 'JualController@index');
Route::get('/jual/tambah', 'JualController@tambah');
Route::post('/jual/simpan', 'JualController@simpan');
Route::get('/jual/edit/{id_brg}', 'JualController@edit');
Route::post('/jual/update/{id_brg}', 'JualController@update');
Route::get('/jual/delete/{id_brg}', 'JualController@delete');
//invoice
Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoice/detail/{id}', 'InvoiceController@detail');
//login
Route::get('/login', 'LoginController@index');
Route::post('/postLogin', 'LoginController@postLogin');