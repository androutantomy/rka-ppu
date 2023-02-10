<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KegiatanController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/kegiatan/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/kegiatan/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/kegiatan/edit');
    }
    
}
