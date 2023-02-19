<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        $this->load->view('dashboard/profil/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/profil/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/profil/edit');
    }
    
}
