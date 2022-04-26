<?php
Route::get('/', function() {
  return view('auth.login');
});

Route::get('/dashboard', 'OrderController@index')->name('dashboard');

Route::get('/jenis', 'JenisController@getAll')->name('jenis');
Route::get('/add-jenis', 'JenisController@add')->name('add-jenis');
Route::post('/create-jenis', 'JenisController@create')->name('create-jenis');
Route::get('/edit-jenis-{id}', 'JenisController@edit');
Route::post('/update-jenis-{id}', 'JenisController@update');
Route::get('/delete-jenis-{id}', 'JenisController@delete');
Route::get('/cari-jenis','JenisController@cari');

Route::get('/pelanggan', 'PelangganController@getAll')->name('pelanggan');
Route::get('/add-pelanggan', 'PelangganController@add')->name('add-pelanggan');
Route::post('/create-pelanggan', 'PelangganController@create')->name('create-pelanggan');
Route::get('/edit-pelanggan-{id}', 'PelangganController@edit');
Route::post('/update-pelanggan-{id}', 'PelangganController@update');
Route::get('/delete-pelanggan-{id}', 'PelangganController@delete');
Route::get('/cari-pelanggan','PelangganController@cari');

Route::get('/order-data', 'OrderController@getAll')->name('order');
Route::get('/order-{id}', 'OrderController@getById');
Route::get('/add-order', 'OrderController@add')->name('add-order');
Route::post('/create-order', 'OrderController@create')->name('create-order');
Route::get('/edit-order-{id}', 'OrderController@edit');
Route::post('/update-order-{id}', 'OrderController@update');
Route::get('/delete-order-{id}', 'OrderController@delete');
Route::get('/cetak-nota-{id}','OrderController@cetaknota');
Route::get('/laporan','OrderController@laporan')->name('laporan');
Route::get('/cetak-laporan/{tglawal}/{tglakhir}','OrderController@cetaklaporan');
Route::get('/cari-order','OrderController@cari');
Route::post('/cariJenis','OrderController@getJenis')->name('cariJenis');

Route::get('/status', 'StatusController@status')->name('status');
Route::post('/update-status-{id}', 'StatusController@update');
Route::get('/cari-status','StatusController@cari');

Auth::routes();
Route::get('/login1', 'LoginController@login')->name('login1');
Route::post('/actionlogin', 'LoginController@actionlogin')->name('actionlogin');
