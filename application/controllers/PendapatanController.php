<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PendapatanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('PendapatanModel');
        $this->load->helper('app_helper');
		$this->load->library('Excel');
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
        $uuid = $this->route->param('uuid');
        $data['data'] = $this->PendapatanModel->get_pendapatan_by_uuid($uuid);

        $this->load->view('dashboard/pendapatan/edit', $data);
    }

    function import()
    {
        $data['random'] = $this->route->param('random');

        $this->load->view('dashboard/pendapatan/import', $data);
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
                route_redirect('pendapatan.tambah', [], ['error' => 'Kode Rekening tidak boleh kosong']);
            }

            $filter = [
                'kode_rekening' => implode('.', $no_rekening),
            ];

            $cek_filter = $this->PendapatanModel->check_existing_norek($filter);
            if ($cek_filter > 0) {
                route_redirect('pendapatan.tambah', [], ['error' => 'Kode Rekening sudah ada di database']);
            }

            $data = [
                'nama_pendapatan' => $this->input->post('nama_pendapatan'),
                'jumlah_pendapatan' => $this->input->post('jumlah_pendapatan') != "" ? str_replace('.', '', $this->input->post('jumlah_pendapatan')) : null,
                'no_rekening_pendapatan' => implode('.', $no_rekening),
                'tahun_anggaran'    => $this->session->userdata('anggaran'),
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
                route_redirect('pendapatan.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Kode Rekening tidak boleh kosong']);
            }

            $filter = [
                'kode_rekening' => implode('.', $no_rekening),
                'uuid_pendapatan'  => $this->input->post('uuid_pendapatan')
            ];

            $cek_filter = $this->PendapatanModel->check_existing_norek($filter);
            if ($cek_filter > 0) {
                route_redirect('pendapatan.ubah', ['uuid' => $this->input->post("uuid_pendapatan")], ['error' => 'Kode Rekening sudah ada di database']);
            }

            $data = [
                'nama_pendapatan' => $this->input->post('nama_pendapatan'),
                'jumlah_pendapatan' => $this->input->post('jumlah_pendapatan') != "" ? str_replace('.', '', $this->input->post('jumlah_pendapatan')) : null,
                'no_rekening_pendapatan' => implode('.', $no_rekening),
                'is_utama' => $this->input->post('rekening_utama') != "" ? $this->input->post('rekening_utama') : null,
                'flag'  => $this->input->post('flag')
            ];

            $simpan = $this->PendapatanModel->edit_pendapatan_by_uuid($data, $this->input->post("uuid_pendapatan"));

            if (!$simpan) {
                route_redirect('pendapatan.ubah', ['uuid' => $this->input->post("uuid_tahun_anggaran")], ['error' => 'Gagal simpan data']);
            }

            route_redirect('pendapatan.home', [], ['message' => 'Berhasil simpan data']);
        }
    }

    public function doHapus()
    {
        if ($this->input->post('uuid_data') == "") {
            route_redirect('pendapatan.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $offset = $this->input->post('offset');

        $hapus = $this->PendapatanModel->hapus_pendapatan_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('pendapatan.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('pendapatan.home2', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }

    public function doImport()
    {
        $file = $_FILES['file'];

        $fileName = str_replace(' ', '_', $_FILES['file']['name']);
        $exp = explode('.', $fileName);
        $fileName = $exp[0] . '_' . date('his') . rand(0000, 9999) . '.' . $exp[1];

        $config['upload_path'] = 'uploads/'; //path upload
        $config['file_name'] = $fileName;  // nama file
        $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
        $config['max_size'] = 10000; // maksimal sizze

        $this->load->library('upload'); //meload librari upload
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            route_redirect('pendapatan.import', ['offset' => $offset != '' ? $offset : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
            echo $this->upload->display_errors();
        }

        $inputFileName = 'uploads/' . $fileName;

        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $sheet             = $objPHPExcel->getSheet(0);
        $highestRow     = $sheet->getHighestRow();
        $highestColumn     = $sheet->getHighestColumn();

        print_r($highestRow);die;

        $response = new stdClass;
        $response->token = $this->security->get_csrf_hash();
        $response->resCode = '200';

        echo json_encode($response);
    }
}
