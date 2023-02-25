<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SubKegiatanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('SubKegiatanModel');
        $this->load->model('KegiatanModel');
    }

    public function index()
    {
        $start = $this->route->param('start') != "" ? $this->route->param('start') : 1;
        $search = str_replace('%20', ' ', $this->route->param('search'));
        $filter = [
            'start' => $start,
            'limit' => 10,
            'search' => $search,
            'parent' => $this->route->param('_locale_uuid')
        ];


        $datatable = $this->SubKegiatanModel->get_all_data($filter);
        $total =  $this->SubKegiatanModel->get_total_data($filter);
        $num_of_pages = ceil($total / 10);
        $next = $start + 1 <= $num_of_pages ? $start + 1 : '';
        $prev = $start - 1 <= $num_of_pages ? $start - 1 : '';

        $data['datatabel'] = $datatable;
        $data['total'] = $total;
        $data['start'] = $start;
        $data['search'] = $search;
        $data['num_of_pages'] = $num_of_pages;
        $data['next'] = $next;
        $data['prev'] = $prev;
        $data['uuid_kegiatan'] = $this->route->param('uuid');


        $this->load->view('dashboard/subkegiatan/index', $data);
    }

    function add()
    {
        $this->load->view('dashboard/subkegiatan/add');
    }

    function edit()
    {
        $uuid = $this->route->param('uuid');
        $data['data'] = $this->KegiatanModel->get_kegiatan_by_uuid($uuid);

        $this->load->view('dashboard/subkegiatan/edit', $data);
    }

    function simpanValidation()
    {
        $config = [
            [
                'field' => 'nama_kegiatan',
                'label' => 'Nama Tahun Anggaran',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tahun Anggaran tidak boleh kosong'
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
            for ($i = 1; $i <= 6; $i++) {
                if ($this->input->post('kode_rekening_' . $i) != "") {
                    array_push($no_rekening, $this->input->post('kode_rekening_' . $i));
                }
            }
            if (empty($no_rekening)) {
                route_redirect('subkegiatan.tambah', [], ['error' => 'Kode Rekening tidak boleh kosong']);
            }

            $filter = [
                'kode_rekening' => implode('.', $no_rekening),
            ];

            $cek_filter = $this->KegiatanModel->check_existing_norek($filter);
            if ($cek_filter > 0) {
                route_redirect('subkegiatan.tambah', [], ['error' => 'Kode Rekening sudah ada di database']);
            }

            $data = [
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'no_rekening_kegiatan' => implode('.', $no_rekening),
                'flag'  => $this->input->post('flag'),
                'parent_kegiatan' => $this->route->param('_locale_uuid') != "" ? $this->route->param('_locale_uuid') : null
            ];

            $simpan = $this->KegiatanModel->simpan_kegiatan($data);

            if (!$simpan) {
                route_redirect('subkegiatan.tambah', [], ['error' => 'Gagal simpan data']);
            }

            route_redirect('subkegiatan.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    function doUbah()
    {
        $validate = $this->simpanValidation();

        if (!$validate) {
            $this->edit();
        } else {
            $no_rekening = [];
            for ($i = 1; $i <= 6; $i++) {
                if ($this->input->post('kode_rekening_' . $i) != "") {
                    array_push($no_rekening, $this->input->post('kode_rekening_' . $i));
                }
            }
            if (empty($no_rekening)) {
                route_redirect('subkegiatan.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Kode Rekening tidak boleh kosong']);
            }

            $filter = [
                'kode_rekening' => implode('.', $no_rekening),
                'uuid_kegiatan'  => $this->input->post('uuid_kegiatan')
            ];

            $cek_filter = $this->KegiatanModel->check_existing_norek($filter);
            if ($cek_filter > 0) {
                route_redirect('subkegiatan.ubah', ['uuid' => $this->input->post("uuid_kegiatan")], ['error' => 'Kode Rekening sudah ada di database']);
            }

            $data = [
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'no_rekening_kegiatan' => implode('.', $no_rekening),
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->KegiatanModel->edit_kegiatan_by_uuid($data, $this->input->post("uuid_kegiatan"));

            if (!$simpan) {
                route_redirect('subkegiatan.ubah', ['uuid' => $this->input->post("uuid_kegiatan")], ['error' => 'Gagal simpan data']);
            }

            route_redirect('subkegiatan.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    public function doHapus()
    {
        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $start = $this->input->post('start');

        if ($this->input->post('uuid_data') == "") {
            route_redirect('subkegiatan.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $hapus = $this->KegiatanModel->hapus_kegiatan_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('subkegiatan.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('subkegiatan.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }
}
