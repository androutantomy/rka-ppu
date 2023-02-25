<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HitungAnggaranMiddleware implements Luthier\MiddlewareInterface 
{
    public function run($args = '') 
    {
        $CI = &get_instance();
        $session = $CI->session->userdata();

        $tahun_anggaran = $session['anggaran'];
        
    }
}