<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('index');
    }
    
    function forgotPassword()
    {
        $this->load->view('forgot-password');
    }
}
