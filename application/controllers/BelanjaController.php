<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BelanjaController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/belanja/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/belanja/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/belanja/edit');
    }
    
    function detail()
    {
        $this->load->view('dashboard/belanja/detail');
    }
    
}
