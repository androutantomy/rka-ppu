<?php

Route::get('/', 'AuthController@index')->name('login');
Route::get('lupa-password', 'AuthController@forgotPassword')->name('lupa-password');
Route::get('pilih-tahun-anggaran', 'AuthController@pilihTahunAnggaran')->name('pilih-tahun-anggaran');
Route::post('masuk','AuthController@doLogin')->name('masuk');
Route::get('keluar', 'AuthController@doLogout')->name('logout');

Route::group('dashboard', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'DashboardController@index')->name('home');
});

Route::group('anggaran', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'TahunAnggaranController@index')->name('anggaran.home');
    Route::get('tambah', 'TahunAnggaranController@add')->name('anggaran.tambah');
    Route::get('ubah', 'TahunAnggaranController@edit')->name('anggaran.ubah');
});

Route::group('user', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'UserController@index')->name('user.home');
    Route::get('tambah', 'UserController@add')->name('user.tambah');
    Route::get('ubah', 'UserController@edit')->name('user.ubah');
});

Route::group('biaya', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'StandarBiayaController@index')->name('biaya.home');
    Route::get('import', 'StandarBiayaController@import')->name('biaya.import');
    Route::get('ubah', 'StandarBiayaController@edit')->name('biaya.ubah');
});

Route::group('pendapatan', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'PendapatanController@index')->name('pendapatan.home');
    Route::get('import', 'PendapatanController@import')->name('pendapatan.import');
    Route::get('ubah', 'PendapatanController@edit')->name('pendapatan.ubah');
});

Route::group('satuan', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'SatuanController@index')->name('satuan.home');
    Route::get('tambah', 'SatuanController@add')->name('satuan.tambah');
    Route::get('ubah', 'SatuanController@edit')->name('satuan.ubah');
});

Route::group('kegiatan', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('/', 'KegiatanController@index')->name('kegiatan.home');
    Route::get('tambah', 'KegiatanController@add')->name('kegiatan.tambah');
    Route::get('ubah', 'KegiatanController@edit')->name('kegiatan.ubah');
});

Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', FALSE);
