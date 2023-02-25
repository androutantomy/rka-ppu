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
        case 'kegiatan':
            return 'Kegiatan';
            break;

        default:
            return 'Dashboard';
            break;
    }

    function update_session_user()
    {
        $CI =& get_instance();
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
}
