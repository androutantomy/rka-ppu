<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AuthModel');
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

        $filter = [
            'username' => $this->input->post('username')
        ];

        $get_user = $this->AuthModel->get_user_by_username($filter);

        if ($get_user->num_rows() == 0) {
            route_redirect('login', [], ['errors' => 'User tidak ditemukan']);
        }

        $user = $get_user->row();
        if ($user->flag == "0") {
            route_redirect('login', [], ['errors' => 'User tidak aktif']);
        }

        if (!password_verify($this->input->post('password'), $user->password)) {
            route_redirect('login', [], ['errors' => 'Password salah']);
        }

        $session = [];
        $session['isLogin'] = true;
        $session['nama_user'] = $user->nama_user;
        $session['level_user'] = $user->level_user;
        $session['nama_level'] = $user->nama_level;

        $this->session->set_userdata($session);

        route_redirect('pilih-tahun-anggaran');
    }

    public function pilihTahunAnggaran()
    {
        $data['anggaran'] = $this->AuthModel->get_all_active_tahun_anggaran();
        $this->load->view('tahun_anggaran', $data);
    }

    public function setTahunAnggaran()
    {
        $tahun_anggaran = $this->route->param('anggaran');
        $this->session->set_userdata(['anggaran' => $tahun_anggaran]);

        route_redirect('home');
    }
    
    function forgotPassword()
    {
        $this->load->view('forgot-password');
    }

    public function doLogout()
    {
        $this->session->sess_destroy();

		route_redirect('login');
    }
}
