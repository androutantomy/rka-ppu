<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SatuanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('SatuanModel');
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

        
        $datatable = $this->SatuanModel->get_all_data($filter);
        $total =  $this->SatuanModel->get_total_data($filter);
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

        $this->load->view('dashboard/satuan/index', $data);
    }
    
    function edit()
    {
        $uuid = $this->route->param('uuid');
        $data['data'] = $this->SatuanModel->get_satuan_by_uuid($uuid);

        $this->load->view('dashboard/satuan/edit', $data);
    }
    
    function add()
    {
        $this->load->view('dashboard/satuan/add');
    }

    function simpanValidation()
    {
        $config = [
            [
                'field' => 'nama_satuan',
                'label' => 'Nama Satuan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Satuan tidak boleh kosong'
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

        if (!$validate) {
            $this->add();
        } else {
            $data = [
                'nama_satuan' => $this->input->post('nama_satuan'),
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->SatuanModel->simpan_satuan($data);

            if (!$simpan) {
                route_redirect('satuan.tambah', [], ['error' => 'Gagal simpan data']);
            }

            route_redirect('satuan.home', [], ['message' => 'Berhasil simpan data']);
        }
    }
    
    function doUbah()
    {
        $validate = $this->simpanValidation();

        if (!$validate) {
            $this->edit();
        } else {
            $data = [
                'nama_satuan' => $this->input->post('nama_satuan'),
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->SatuanModel->edit_satuan_by_uuid($data, $this->input->post("uuid_satuan"));

            if (!$simpan) {
                route_redirect('satuan.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Gagal simpan data']);
            }

            route_redirect('satuan.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    public function doHapus()
    {
        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $start = $this->input->post('offset');

        if ($this->input->post('uuid_data') == "") {
            route_redirect('satuan.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $hapus = $this->SatuanModel->hapus_satuan_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('satuan.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('satuan.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }
}
