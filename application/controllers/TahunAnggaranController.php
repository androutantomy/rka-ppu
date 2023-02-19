<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TahunAnggaranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('TahunAnggaranModel');
    }

    public function index()
    {
        $start = $this->route->param('start');
        $search = $this->route->param('search');
        $filter = [
            'start' => $start != "" ? $start : 0,
            'limit' => 10,
            'search' => $search
        ];

        $datatable = $this->TahunAnggaranModel->get_all_data($filter);

        $data['datatabel'] = $datatable;
        $data['total'] = $this->TahunAnggaranModel->get_total_data($filter);
        $data['start'] = $start;
        $data['search'] = $search;

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
        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    function add()
    {
        $this->load->view('dashboard/tahunAnggaran/add');
    }

    public function doSimpan()
    {
        $validate = $this->simpanValidation();

        if (!$validate) {
            $this->add();
        } else {
            $data = [
                'nama_tahun_anggaran' => $this->input->post('nama_tahun_anggaran'),
                'budget_tahun_anggaran'  => str_replace('.', '', $this->input->post('budget_tahun_anggaran')),
                'flag'  => $this->input->post('status_tahun_anggaran')
            ];

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

        if (!$validate) {
            $this->edit();
        } else {
            $data = [
                'nama_tahun_anggaran' => $this->input->post('nama_tahun_anggaran'),
                'budget_tahun_anggaran'  => str_replace('.', '', $this->input->post('budget_tahun_anggaran')),
                'flag'  => $this->input->post('status_tahun_anggaran')
            ];

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

        $this->load->view('dashboard/tahunAnggaran/edit', $data);
    }

    public function doHapus()
    {
        if ($this->input->post('uuid_data') == "") {
            route_redirect('anggaran.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $offset = $this->input->post('offset');

        $hapus = $this->TahunAnggaranModel->hapus_anggaran_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('anggaran.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('anggaran.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }
}
