<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function loginValidation()
    {
        $config = [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong'
                ]
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ],
        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function doLogin()
    {
        $validate = $this->loginValidation();

        if (!$validate) {
            route_redirect('login', [], ['errors' => validation_errors()]);
        }

        $session = [];
        $session['isLogin'] = true;

        $this->session->set_userdata($session);

        route_redirect('pilih-tahun-anggaran');
    }
    
    function forgotPassword()
    {
        $this->load->view('forgot-password');
    }
    
    function pilihTahunAnggaran()
    {
        $this->load->view('pilih-tahun-anggaran');
    }

    public function doLogout()
    {
        $this->session->sess_destroy();

		route_redirect('login');
    }
}
