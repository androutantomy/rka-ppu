<?php

Route::get('login', 'AuthController@doLogout')->name('logout');
Route::get('dashboard', 'DashboardController@index')->name('home');


Route::get('/', function () {
})->name('homepage');

Route::set('404_override', function () {
    show_404();
});

Route::set('translate_uri_dashes', FALSE);
