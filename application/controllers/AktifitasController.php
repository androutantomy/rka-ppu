<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AktifitasController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/aktifitas/index');
    }
   
}
