<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggaranMiddleware implements Luthier\MiddlewareInterface 
{
    public function run($args = '') 
    {
        $CI = &get_instance();
        $session = $CI->session->userdata();

        if (!isset($session) || $session['anggaran'] == '') {
            route_redirect('pilih-tahun-anggaran', [], ['errors' => 'Pilih tahun anggaran dahulu']);
        }
    }
}