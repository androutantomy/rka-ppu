<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route = Luthier\Route::getRoutes();
$route['default_controller'] = 'AuthController/index';
$route['forgot-password'] = 'AuthController/forgotPassword';
$route['dashboard'] = 'DashboardController/index';

//tahun anggaran
$route['tahunAnggaran'] = 'TahunAnggaranController/index';
$route['add-tahun-anggaran'] = 'TahunAnggaranController/add';
$route['edit-tahun-anggaran'] = 'TahunAnggaranController/edit';

//user management
$route['user'] = 'UserController/index';
$route['add-user'] = 'UserController/add';
$route['edit-user'] = 'UserController/edit';

//SSH
$route['ssh'] = 'SshController/index';
$route['edit-ssh'] = 'SshController/edit';
$route['import-ssh'] = 'SshController/import';

//pendapatan
$route['pendapatan'] = 'PendapatanController/index';
$route['edit-pendapatan'] = 'PendapatanController/edit';
$route['import-pendapatan'] = 'PendapatanController/import';

//satuan
$route['satuan'] = 'SatuanController/index';
$route['add-satuan'] = 'SatuanController/add';
$route['edit-satuan'] = 'SatuanController/edit';

//kegiatan
$route['kegiatan'] = 'KegiatanController/index';
$route['add-kegiatan'] = 'KegiatanController/add';
$route['edit-kegiatan'] = 'KegiatanController/edit';

