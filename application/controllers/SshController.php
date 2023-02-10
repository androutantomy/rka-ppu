<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SshController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/ssh/index');
    }
    
    function edit()
    {
        $this->load->view('dashboard/ssh/edit');
    }
    
    function import()
    {
        $this->load->view('dashboard/ssh/import');
    }
    
}
