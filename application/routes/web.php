<?php

Route::get('/', 'AuthController@index')->name('index');
Route::get('/', 'AuthController@forgot-password')->name('forgot-password');
Route::get('dashboard', 'DashboardController@index')->name('index');
Route::get('tahunAnggaran', 'TahunAnggaranController@index')->name('index');
Route::get('user', 'UserController@index')->name('index');
Route::get('ssh', 'SshController@index')->name('index');
Route::get('pendapatan', 'PendapatanController@index')->name('index');
Route::get('satuan', 'SatuanController@index')->name('index');
Route::get('kegiatan', 'KegiatanController@index')->name('index');

Route::get('/', function () {
})->name('index');

Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', FALSE);
