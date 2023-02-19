<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SubKegiatanController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/subkegiatan/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/subkegiatan/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/subkegiatan/edit');
    }
    
}
