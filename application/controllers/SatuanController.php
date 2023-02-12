<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SatuanController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/satuan/index');
    }
    
    function edit()
    {
        $this->load->view('dashboard/satuan/edit');
    }
    
    function add()
    {
        $this->load->view('dashboard/satuan/add');
    }
    
}
