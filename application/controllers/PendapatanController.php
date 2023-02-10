<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PendapatanController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/pendapatan/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/pendapatan/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/pendapatan/edit');
    }
    
    function import()
    {
        $this->load->view('dashboard/pendapatan/import');
    }
    
}
