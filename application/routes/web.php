<?php
// $ci =& get_instance();
// $locale = ci()->session->userdata('anggaran');

Route::get('/', 'AuthController@index')->name('login');
Route::get('lupa-password', 'AuthController@forgotPassword')->name('lupa-password');
Route::post('masuk','AuthController@doLogin')->name('masuk');
Route::get('keluar', 'AuthController@doLogout')->name('logout');

Route::group('', ['middleware' => ['AuthMiddleware']], function() {
    Route::get('pilih-tahun-anggaran', 'AuthController@pilihTahunAnggaran')->name('pilih-tahun-anggaran');
    Route::get('simpan-tahun-anggaran/{anggaran}', 'AuthController@setTahunAnggaran')->name('set-tahun-anggaran');
});

Route::group('', ['middleware' => ['AnggaranMiddleware']], function() {
    Route::group('dashboard', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'DashboardController@index')->name('home');
    });
    
    Route::group('anggaran', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'TahunAnggaranController@index')->name('anggaran.home');
        Route::get('tambah', 'TahunAnggaranController@add')->name('anggaran.tambah');
        Route::get('ubah/{uuid}', 'TahunAnggaranController@edit')->name('anggaran.ubah');
        Route::get('{num:offset?}/{q?}', 'TahunAnggaranController@index')->name('anggaran.home2');
        Route::post('simpan', 'TahunAnggaranController@doSimpan')->name('anggaran.simpan');
        Route::post('simpan-ubah', 'TahunAnggaranController@doUbah')->name('anggaran.simpan-ubah');
        Route::post('hapus', 'TahunAnggaranController@doHapus')->name('anggaran.hapus');
    });
    
    Route::group('user', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'UserController@index')->name('user.home');
        Route::get('tambah', 'UserController@add')->name('user.tambah');
        Route::get('ubah/{uuid}', 'UserController@edit')->name('user.ubah');
        Route::get('{num:offset?}/{q?}', 'UserController@index')->name('user.home2');
        Route::post('simpan', 'UserController@doSimpan')->name('user.simpan');
        Route::post('simpan-ubah', 'UserController@doUbah')->name('user.simpan-ubah');
        Route::post('hapus', 'UserController@doHapus')->name('user.hapus');
    });

    Route::group('satuan', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'SatuanController@index')->name('satuan.home');
        Route::get('tambah', 'SatuanController@add')->name('satuan.tambah');
        Route::get('ubah/{uuid}', 'SatuanController@edit')->name('satuan.ubah');
        Route::get('{num:offset?}/{q?}', 'SatuanController@index')->name('satuan.home2');
        Route::post('simpan', 'SatuanController@doSimpan')->name('satuan.simpan');
        Route::post('simpan-ubah', 'SatuanController@doUbah')->name('satuan.simpan-ubah');
        Route::post('hapus', 'SatuanController@doHapus')->name('satuan.hapus');
    });
    
    Route::group('pendapatan', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'PendapatanController@index')->name('pendapatan.home');
        Route::get('import', 'PendapatanController@import')->name('pendapatan.import');
        Route::get('ubah', 'PendapatanController@edit')->name('pendapatan.ubah');
        Route::get('tambah', 'PendapatanController@add')->name('pendapatan.tambah');
        Route::post('simpan', 'PendapatanController@doSimpan')->name('pendapatan.simpan');
    });
    
    Route::group('biaya', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'StandarBiayaController@index')->name('biaya.home');
        Route::get('import', 'StandarBiayaController@import')->name('biaya.import');
        Route::get('ubah', 'StandarBiayaController@edit')->name('biaya.ubah');
    });
    
    
    Route::group('kegiatan', ['middleware' => ['AuthMiddleware']], function() {
        Route::get('/', 'KegiatanController@index')->name('kegiatan.home');
        Route::get('tambah', 'KegiatanController@add')->name('kegiatan.tambah');
        Route::get('ubah', 'KegiatanController@edit')->name('kegiatan.ubah');
    });
});


Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', FALSE);
