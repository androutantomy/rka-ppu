<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TahunAnggaranController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/tahunAnggaran/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/tahunAnggaran/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/tahunAnggaran/edit');
    }
    
}
