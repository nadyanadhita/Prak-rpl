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
    return view('Home');
});

Route::get('/stokmasuk','WallnoteController@StokMasuk');
Route::get('/stokmasuk/tambahSM','WallnoteController@tambahStokMasuk');
Route::post('/stokmasuk/tambahStokMasuk','WallnoteController@tambahSM');

Route::get('/stokmasuk/updateSM/{KodeTransaksi}','WallnoteController@updateStokMasuk');
route::post('/stokmasuk/updateStokMasuk/{KodeTransaksi}', 'WallnoteController@updateSM');
Route::get('/stokmasuk/delete/{KodeTransaksi}','WallnoteController@deleteSM');

Route::get('/stokkeluar','WallnoteController@StokKeluar');
Route::get('/stokkeluar/tambahSK','WallnoteController@tambahStokKeluar');
Route::post('/stokkeluar/tambahStokKeluar','WallnoteController@tambahSK');

Route::get('/stokkeluar/updateSK/{KodeTransaksi}','WallnoteController@updateStokKeluar');
route::post('/stokkeluar/updateStokKeluar/{KodeTransaksi}', 'WallnoteController@updateSK');
Route::get('/stokkeluar/delete/{KodeTransaksi}','WallnoteController@deleteSK');