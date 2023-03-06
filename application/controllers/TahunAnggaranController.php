<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TahunAnggaranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('TahunAnggaranModel');
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

        
        $datatable = $this->TahunAnggaranModel->get_all_data($filter);
        $total =  $this->TahunAnggaranModel->get_total_data($filter);
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

        $this->load->view('dashboard/tahunAnggaran/index', $data);
    }

    function simpanValidation()
    {
        $config = [
            [
                'field' => 'nama_tahun_anggaran',
                'label' => 'Nama Tahun Anggaran',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tahun Anggaran tidak boleh kosong'
                ]
            ],
            [
                'field' => 'budget_tahun_anggaran',
                'label' => 'Budget Tahun Anggaran',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Budget Tahun Anggaran tidak boleh kosong'
                ]
            ],
            [
                'field' => 'status_tahun_anggaran',
                'label' => 'Status',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status tidak boleh kosong'
                ]
            ],
            [
                'field' => 'akhir_input_anggaran',
                'label' => 'Akhir Input Anggaran',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Akhir Input Anggaran tidak boleh kosong'
                ]
            ],
        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    function add()
    {
        $data['admin'] = $this->UserModel->get_all_admin_prodi();

        $this->load->view('dashboard/tahunAnggaran/add', $data);
    }

    public function doSimpan()
    {
        $validate = $this->simpanValidation();
        $admin = $this->UserModel->get_all_admin_prodi();

        if (!$validate) {
            $this->add();
        } else {
            $data = [
                'nama_tahun_anggaran' => $this->input->post('nama_tahun_anggaran'),
                'budget_tahun_anggaran'  => preg_replace('/[^0-9]/', '', $this->input->post('budget_tahun_anggaran')),
                'flag'  => $this->input->post('status_tahun_anggaran'),
                'akhir_input_anggaran' => $this->input->post('akhir_input_anggaran'),
            ];

            if ($admin->num_rows() > 0) {
                $budget_admin = [];
                foreach ($admin->result() as $admin) {
                    $budget = [
                        'admin' => 'budget_' . str_replace(' ', '_', trim(strtolower($admin->uuid_user))),
                        'budget' => preg_replace('/[^0-9]/', '', $this->input->post('budget_' . str_replace(' ', '_', trim(strtolower($admin->uuid_user)))))
                    ];

                    array_push($budget_admin, $budget);
                }

                $data['anggaran_prodi'] = !empty($budget_admin) ? json_encode($budget_admin) : null;
            }

            $simpan = $this->TahunAnggaranModel->simpan_tahun_anggaran($data);

            if (!$simpan) {
                route_redirect('anggaran.tambah', [], ['error' => 'Gagal simpan data']);
            }

            route_redirect('anggaran.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    function doUbah()
    {
        $validate = $this->simpanValidation();
        $admin = $this->UserModel->get_all_admin_prodi();

        if (!$validate) {
            $this->edit();
        } else {
            $data = [
                'nama_tahun_anggaran' => $this->input->post('nama_tahun_anggaran'),
                'budget_tahun_anggaran'  => preg_replace('/[^0-9]/', '', $this->input->post('budget_tahun_anggaran')),
                'flag'  => $this->input->post('status_tahun_anggaran'),
                'akhir_input_anggaran' => $this->input->post('akhir_input_anggaran'),
            ];

            if ($admin->num_rows() > 0) {
                $budget_admin = [];
                foreach ($admin->result() as $admin) {
                    $budget = [
                        'admin' => 'budget_' . str_replace(' ', '_', trim(strtolower($admin->uuid_user))),
                        'budget' => preg_replace('/[^0-9]/', '', $this->input->post('budget_' . str_replace(' ', '_', trim(strtolower($admin->uuid_user)))))
                    ];

                    array_push($budget_admin, $budget);
                }
                
                $data['anggaran_prodi'] = !empty($budget_admin) ? json_encode($budget_admin) : null;
            }

            $simpan = $this->TahunAnggaranModel->edit_anggaran_by_uuid($data, $this->input->post("uuid_tahun_anggaran"));

            if (!$simpan) {
                route_redirect('anggaran.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Gagal simpan data']);
            }

            route_redirect('anggaran.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    function edit()
    {
        $uuid = $this->route->param('uuid');
        $data['data'] = $this->TahunAnggaranModel->get_anggaran_by_uuid($uuid);
        $data['admin'] = $this->UserModel->get_all_admin_prodi();

        $this->load->view('dashboard/tahunAnggaran/edit', $data);
    }

    public function doHapus()
    {
        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $start = $this->input->post('offset');

        if ($this->input->post('uuid_data') == "") {
            route_redirect('anggaran.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $hapus = $this->TahunAnggaranModel->hapus_anggaran_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('anggaran.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('anggaran.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }
}
