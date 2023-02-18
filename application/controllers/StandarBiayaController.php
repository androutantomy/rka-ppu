<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StandarBiayaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('StandarBiayaModel');
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

        $datatable = $this->StandarBiayaModel->get_all_data($filter);

        $data['datatabel'] = $datatable;
        $data['total'] = $this->StandarBiayaModel->get_total_data($filter);
        $data['start'] = $start;
        $data['search'] = $search;

        $this->load->view('dashboard/ssh/index', $data);
    }

    function add()
    {
        $this->load->view('dashboard/ssh/add');
    }

    function edit()
    {
        $uuid = $this->route->param('uuid');
        $data['data'] = $this->StandarBiayaModel->get_standar_biaya_by_uuid($uuid);

        $this->load->view('dashboard/ssh/edit', $data);
    }

    function import()
    {
        $this->load->view('dashboard/ssh/import');
    }

    function simpanValidation()
    {
        $config = [
            [
                'field' => 'nama_standar_biaya',
                'label' => 'Nama Standar Biaya',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Standar Biaya tidak boleh kosong'
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
            [
                'field' => 'kode_rekening_1',
                'label' => 'Kode Rekening',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode rekening tidak boleh kosong'
                ]
            ],

        ];

        $this->form_validation->set_rules($config);

        return $this->form_validation->run();
    }

    public function doSimpan()
    {
        $validate = $this->simpanValidation();


        if (!$validate) {
            $this->add();
        } else {
            $no_rekening = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($this->input->post('kode_rekening_' . $i) != "") {
                    array_push($no_rekening, $this->input->post('kode_rekening_' . $i));
                }
            }
            if (empty($no_rekening)) {
                route_redirect('biaya.tambah', [], ['error' => 'Kode Rekening tidak boleh kosong']);
            }

            $filter = [
                'kode_rekening' => implode('.', $no_rekening),
            ];

            $cek_filter = $this->StandarBiayaModel->check_existing_norek($filter);
            if ($cek_filter > 0) {
                route_redirect('biaya.tambah', [], ['error' => 'Kode Rekening sudah ada di database']);
            }

            $data = [
                'nama_standar_biaya' => $this->input->post('nama_standar_biaya'),
                'jumlah_standar_biaya' => $this->input->post('jumlah_standar_biaya') != "" ? str_replace('.', '', $this->input->post('jumlah_standar_biaya')) : null,
                'no_rekening_standar_biaya' => implode('.', $no_rekening),
                'tahun_anggaran'    => $this->session->userdata('anggaran'),
                'is_utama' => $this->input->post('rekening_utama') != "" ? $this->input->post('rekening_utama') : null,
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->StandarBiayaModel->simpan_standar_biaya($data);

            if (!$simpan) {
                route_redirect('biaya.tambah', [], ['error' => 'Gagal simpan data']);
            }

            route_redirect('biaya.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    function doUbah()
    {
        $validate = $this->simpanValidation();

        if (!$validate) {
            $this->edit();
        } else {
            $no_rekening = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($this->input->post('kode_rekening_' . $i) != "") {
                    array_push($no_rekening, $this->input->post('kode_rekening_' . $i));
                }
            }
            if (empty($no_rekening)) {
                route_redirect('biaya.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Kode Rekening tidak boleh kosong']);
            }

            $filter = [
                'kode_rekening' => implode('.', $no_rekening),
                'uuid_standar_biaya'  => $this->input->post('uuid_standar_biaya')
            ];

            $cek_filter = $this->StandarBiayaModel->check_existing_norek($filter);
            if ($cek_filter > 0) {
                route_redirect('biaya.ubah', ['uuid' => $this->input->post("uuid_standar_biaya")], ['error' => 'Kode Rekening sudah ada di database']);
            }

            $data = [
                'nama_standar_biaya' => $this->input->post('nama_standar_biaya'),
                'jumlah_standar_biaya' => $this->input->post('jumlah_standar_biaya') != "" ? str_replace('.', '', $this->input->post('jumlah_standar_biaya')) : null,
                'no_rekening_standar_biaya' => implode('.', $no_rekening),
                'is_utama' => $this->input->post('rekening_utama') != "" ? $this->input->post('rekening_utama') : null,
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->StandarBiayaModel->edit_standar_biaya_by_uuid($data, $this->input->post("uuid_standar_biaya"));

            if (!$simpan) {
                route_redirect('biaya.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Gagal simpan data']);
            }

            route_redirect('biaya.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    public function doHapus()
    {
        if ($this->input->post('uuid_data') == "") {
            route_redirect('biaya.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $offset = $this->input->post('offset');

        $hapus = $this->StandarBiayaModel->hapus_standar_biaya_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('biaya.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('biaya.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }
}
