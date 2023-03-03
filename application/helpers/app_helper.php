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
        case 'kegiatan':
            return 'Kegiatan';
            break;
        case 'belanja':
            return 'Rincian Belanja';
            break;

        default:
            return 'Dashboard';
            break;
    }
}

function update_session_user()
{
    $CI = &get_instance();
    $CI->load->model('AuthModel');

    $filter = [
        'username' => $CI->input->post('username')
    ];

    $get_user = $CI->AuthModel->get_user_by_username($filter);

    $user = $get_user->row();

    $session = [];
    $session['isLogin'] = true;
    $session['nama_user'] = $user->nama_user;
    $session['level_user'] = $user->level_user;
    $session['nama_level'] = $user->nama_level;
    $session['uuid_user'] = $user->uuid_user;

    $CI->session->set_userdata($session);

    return true;
}

function get_list_total_anggaran()
{
    $CI = &get_instance();
    $res = new stdClass;
    $CI->load->model('BelanjaModel');
    $CI->load->model('TahunAnggaranModel');

    $belanja_yayasan = $belanja_prodi = $total_prodi = $rincian_belanja = 0;

    $tahun_anggaran = $CI->session->userdata('anggaran');
    $uuid_user = $CI->session->userdata("uuid_user");
    $level_user = $CI->session->userdata("level_user");

    $anggaran = $CI->TahunAnggaranModel->get_tahun_anggaran_by_name($tahun_anggaran);
    
    $get_total_rincian = $CI->BelanjaModel->get_total_rincian_belanja();
    if (!empty($get_total_rincian)) {
        $rincian_belanja = number_format($get_total_rincian->total_belanja, 0, '.', ',');
    }

    if (!empty($anggaran)) {
        $belanja_yayasan = number_format($anggaran->budget_tahun_anggaran, 0, '.', ',');

        $anggaran_prodi = $anggaran->anggaran_prodi != "" ? json_decode($anggaran->anggaran_prodi) : '';
        if ($anggaran_prodi != "") {
            foreach ($anggaran_prodi as $prodi) {
                $belanja_prodi += $prodi->budget;
                if ($level_user != "1" && 'budget_' . $uuid_user == $prodi->admin) {
                    $belanja_prodi = $prodi->budget;
                }
            }
        }
        $get_total_prodi = $CI->BelanjaModel->get_total_belanja_prodi();
        if (!empty($get_total_prodi)) {
            $total_prodi = number_format($get_total_prodi->total_belanja, 0, '.', ',');
        }
    }

    $res->belanja_yayasan = $belanja_yayasan;
    $res->belanja_prodi = number_format($belanja_prodi, 0, '.', ',');;
    $res->total_prodi = $total_prodi;
    $res->rincian_belanja = $rincian_belanja;

    return $res;
}

function currency_formatter($number = '', $with_currency = true)
{
    $num = '';
    $currency = $with_currency ? 'Rp. ' : '';

    if ($number != '') {
        $num = $currency . number_format($number, 0, ',', '.');
    }

    return $num;
}
