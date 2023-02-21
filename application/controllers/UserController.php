<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }

    public function index()
    {
        $start = $this->route->param('start') != "" ? $this->route->param('start') : 1;
        $search = str_replace('%20', ' ', $this->route->param('search'));
        $filter = [
            'start' => $start,
            'limit' => 10,
            'search' => $search
        ];

        
        $datatable = $this->UserModel->get_all_data($filter);
        $total =  $this->UserModel->get_total_data($filter);
        $num_of_pages = ceil($total / 10);
        $next = $start+1 <= $num_of_pages ? $start+1 : '';
        $prev = $start-1 <= $num_of_pages ? $start-1 : '';

        $data['datatabel'] = $datatable;
        $data['total'] = $total;
        $data['start'] = $start;
        $data['search'] = $search;
        $data['num_of_pages'] = $num_of_pages;
        $data['next'] = $next;
        $data['prev'] = $prev;

        $this->load->view('dashboard/user/index', $data);
    }

    public function add()
    {
        $this->load->view('dashboard/user/add');
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
            [
                'field' => 're_password',
                'label' => 'Tulis Ulang Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Tulis Ulang Password tidak boleh kosong',
                    'matches' => 'Tulis Ulang Password harus sama dengan Password'
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
            ],
            [
                'field' => 'role_pengguna',
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role tidak boleh kosong'
                ]
            ],
            [
                'field' => 'status_pengguna',
                'label' => 'Status',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status tidak boleh kosong'
                ]
            ],
        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    function doSimpan()
    {
        $validate = $this->simpanValidation();
        $validate2 = $this->loginValidation();

        if (!$validate || !$validate2) {
            $this->add();
        } else {
            $data = [
                'nama_user' => $this->input->post('nama_pengguna'),
                'username'  => $this->input->post('username'),
                'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level_user'    => $this->input->post('role_pengguna'),
                'nama_level'    => $this->listRole($this->input->post('role_pengguna')),
                'flag'      => $this->input->post('status_pengguna'),
                'email_user' => $this->input->post('email_pengguna')
            ];

            $simpan = $this->UserModel->simpan_user($data);

            if (!$simpan) {
                route_redirect('user.tambah', [], ['error' => 'Gagal simpan data']);
            }

            route_redirect('user.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    function listRole($role)
    {
        switch ($role) {
            case '2':
                return 'Admin Prodi';
                break;
            case '3':
                return 'Staff';
                break;

            default:
                return 'Superadmin';
                break;
        }
    }

    public function edit()
    {
        $uuid = $this->route->param('uuid');
        $data['data'] = $this->UserModel->get_user_by_uuid($uuid);

        $this->load->view('dashboard/user/edit', $data);
    }

    function doUbah()
    {
        $validate = $this->simpanValidation();

        if (!$validate) {
            $this->edit();
        } else {
            $data = [
                'nama_user' => $this->input->post('nama_pengguna'),
                'level_user'    => $this->input->post('role_pengguna'),
                'nama_level'    => $this->listRole($this->input->post('role_pengguna')),
                'flag'      => $this->input->post('status_pengguna'),
                'email_user' => $this->input->post('email_pengguna')
            ];

            $simpan = $this->UserModel->edit_user_by_uuid($data, $this->input->post("uuid_user"));

            if (!$simpan) {
                route_redirect('user.ubah', ['uuid' => $this->input->post("uuid_user")], ['error' => 'Gagal simpan data']);
            }

            route_redirect('user.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    public function doHapus()
    {
        if ($this->input->post('uuid_data') == "") {
            route_redirect('user.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid User tidak valid']);
        }

        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $offset = $this->input->post('offset');

        $hapus = $this->UserModel->hapus_user_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('user.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('user.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }
}
