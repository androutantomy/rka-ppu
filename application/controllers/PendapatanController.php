<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PendapatanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('PendapatanModel');
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

        $datatable = $this->PendapatanModel->get_all_data($filter);

        $data['datatabel'] = $datatable;
        $data['total'] = $this->PendapatanModel->get_total_data($filter);
        $data['start'] = $start;
        $data['search'] = $search;

        $this->load->view('dashboard/pendapatan/index', $data);
    }
    
    function add()
    {
        $this->load->view('dashboard/pendapatan/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/pendapatan/edit');
    }
    
    function import()
    {
        $this->load->view('dashboard/pendapatan/import');
    }

    function simpanValidation()
    {
        $config = [
            [
                'field' => 'nama_pendapatan',
                'label' => 'Nama Pendapatan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pendapatan tidak boleh kosong'
                ]
                ],
            [
                'field' => 'flag',
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
    
    public function doSimpan()
    {
        $validate = $this->simpanValidation();

        $no_rekening = [];
        for ($i = 1; $i <= 5; $i++) {
            if ($this->input->post('kode_rekening_' . $i) != "") {
                array_push($no_rekening, $this->input->post('kode_rekening_' . $i));
            }
        }
        if (empty($no_rekening)) {
            route_redirect('pendapatan.tambah', [], ['error' => 'Kode Rekening tidak boleh kosong']);
        }

        $filter = [
            'kode_rekening' => implode('.', $no_rekening),
        ];

        $cek_filter = $this->PendapatanModel->check_existing_norek($filter);
        if ($cek_filter > 0) {
            route_redirect('pendapatan.tambah', [], ['error' => 'Kode Rekening sudah ada di database']);
        }

        if (!$validate) {
            $this->add();
        } else {
            $data = [
                'nama_pendapatan' => $this->input->post('nama_pendapatan'),
                'no_rekening_pendapatan' => implode('.', $no_rekening),
                'is_utama' => $this->input->post('rekening_utama') != "" ? $this->input->post('rekening_utama') : null,
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->PendapatanModel->simpan_pendapatan($data);

            if (!$simpan) {
                route_redirect('pendapatan.tambah', [], ['error' => 'Gagal simpan data']);
            }

            route_redirect('pendapatan.home', [], ['message' => 'Berhasil simpan data']);
        }
    }
}
