<?php

function generate_random_code_import()
{
    $length = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function view(array $data)
{
    // $data['']
}

function menu_list($menu)
{
    switch ($menu) {
        case 'satuan':
            return 'Satuan';
            break;
        case 'user':
            return 'User Management';
            break;
        case 'anggaran':
            return 'Tahun Anggaran';
            break;
        case 'pendapatan':
            return 'Pendapatan';
            break;
        case 'biaya':
            return 'Standar Biaya';
            break;
        case 'satuan':
            return 'Kegiatan';
            break;
        case 'subkegiatan':
            return 'Sub Kegiatan';
            break;
        case 'aktifitas':
            return 'Log Aktifitas';
            break;
        case 'profil':
            return 'Profil Pengguna';
            break;

        default:
            return 'Dashboard';
            break;
    }
}
