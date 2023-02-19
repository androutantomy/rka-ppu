<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AktifitasMiddleware implements Luthier\MiddlewareInterface
{
    public function run($args = '')
    {
        $CI = &get_instance();
        $CI->load->model('AktifitasModel');
        $session = $CI->session->userdata();

        $param = Route::getCurrentRoute();

        if ($param->requestMethod == 'POST') {
            $name = explode('.', $param->getName());

            $data = [
                'routes_aktifitas'  => $param->getPrefix(),
                'nama_pengguna'     => $session['nama_user'],
                'role_pengguna'     => $session['nama_level'],
                'tanggal'           => date('Y-m-d H:i:s'),
                'keterangan'        => $this->tipe_name($name[1]) . menu_list($name[0])
            ];

            $CI->AktifitasModel->simpan_aktifitas($data);
        }
    }

    function tipe_name($name)
    {
        switch ($name) {
            case 'simpan-ubah':
                return 'Update data ';
                break;
            case 'hapus':
                return 'Hapus data ';
                break;

            default:
                return 'Tambah data ';
                break;
        }
    }
}
