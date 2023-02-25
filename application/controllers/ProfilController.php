<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->model('AuthModel');
    }

    public function index()
    {
        $uuid = $this->session->userdata('uuid_user');
        $data['data'] = $this->UserModel->get_user_by_uuid($uuid);

        $this->load->view('dashboard/profil/index', $data);
    }
    
    function add()
    {
        $this->load->view('dashboard/profil/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/profil/edit');
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
            ]
        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    function simpanValidation()
    {
        $config = [
            [
                'field' => 'nama_pengguna',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            [
                'field' => 'email_pengguna',
                'label' => 'Email',
                'rules' => 'valid_email',
                'errors' => [
                    'valid_email' => 'Email tidak valid'
                ]
            ]
        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    function doUbah()
    {
        $validate = $this->simpanValidation();
        $validate2 = $this->loginValidation();

        if (!$validate || !$validate2) {
            $this->index();
        } else {
            if ($this->input->post('password') != $this->input->post('re_password')) {
                route_redirect('profil.home', ['uuid' => $this->session->userdata('uuid_user')], ['error' => 'Re password harus sesuai dengan password']);
            }

            $data = [
                'nama_user' => $this->input->post('nama_pengguna'),
                'email_user' => $this->input->post('email_pengguna'),
                'username'  => $this->input->post('username'),
            ];

            if ($this->input->post('password') != "") {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            $simpan = $this->UserModel->edit_user_by_uuid($data,  $this->session->userdata('uuid_user'));

            
            if (!$simpan) {
                route_redirect('profil.home', ['uuid' =>  $this->session->userdata('uuid_user')], ['error' => 'Gagal simpan data']);
            }

            $this->update_session();

            if ($this->input->post('password') != "") {
                route_redirect('login', [], ['errors' => 'Silahkan login dengan password terbaru']);
            }

            route_redirect('profil.home', ['uuid' =>  $this->session->userdata('uuid_user')], ['message' => 'Berhasil simpan data']);
        }
    }

    function update_session()
    {
        $filter = [
            'username' => $this->input->post('username')
        ];

        $get_user = $this->AuthModel->get_user_by_username($filter);

        $user = $get_user->row();

        $session = [];
        $session['isLogin'] = true;
        $session['nama_user'] = $user->nama_user;
        $session['level_user'] = $user->level_user;
        $session['nama_level'] = $user->nama_level;
        $session['uuid_user'] = $user->uuid_user;

        $this->session->set_userdata($session);
    }
}
