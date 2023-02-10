<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/user/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/user/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/user/edit');
    }
    
}
