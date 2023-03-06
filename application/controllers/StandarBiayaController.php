<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StandarBiayaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('StandarBiayaModel');
        $this->load->helper('app_helper');
        $this->load->model('SatuanModel');
        $this->load->library('Excel');
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


        $datatable = $this->StandarBiayaModel->get_all_data($filter);
        $total =  $this->StandarBiayaModel->get_total_data($filter);
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
            ]

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
                'jumlah_standar_biaya' => $this->input->post('jumlah_standar_biaya') != "" ? preg_replace('/[^0-9]/', '', $this->input->post('jumlah_standar_biaya')) : null,
                'no_rekening_standar_biaya' => implode('.', $no_rekening),
                'tahun_anggaran'    => $this->session->userdata('anggaran'),
                'is_utama' => $this->input->post('rekening_utama') != "" ? $this->input->post('rekening_utama') : null,
                'flag'  => $this->input->post('flag'),
                'satuan_harga' => $this->input->post('satuan_harga') != "" ? $this->input->post('satuan_harga') : null
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
            for ($i = 1; $i <= 6; $i++) {
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
                'jumlah_standar_biaya' => $this->input->post('jumlah_standar_biaya') != "" ? preg_replace('/[^0-9]/', '', $this->input->post('jumlah_standar_biaya')) : null,
                'no_rekening_standar_biaya' => implode('.', $no_rekening),
                'is_utama' => $this->input->post('rekening_utama') != "" ? $this->input->post('rekening_utama') : null,
                'flag'  => $this->input->post('flag'),
                'satuan_harga' => $this->input->post('satuan_harga') != "" ? $this->input->post('satuan_harga') : null
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
        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $start = $this->input->post('offset');

        if ($this->input->post('uuid_data') == "") {
            route_redirect('biaya.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Anggaran tidak valid']);
        }

        $hapus = $this->StandarBiayaModel->hapus_standar_biaya_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('biaya.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('biaya.home2', ['start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }

    function doGetSatuan()
    {
        $res = new stdClass;
        $list = [];
        $key = 0;
        $filter = [
            'search' => $this->input->post('query'),
            'limit' => 10
        ];

        $res->newToken = $this->security->get_csrf_hash();
        $datatable = $this->SatuanModel->get_all_data($filter);
        if ($datatable->num_rows() > 0) {
            foreach ($datatable->result() as $result) {
                $list[$key]['text'] = $result->nama_satuan;
                $list[$key]['id'] = $result->uuid_satuan;
                $key++;
            }
        }

        $res->listSatuan = $list;

        echo json_encode($res);
    }

    function doGetTemplate()
    {
        $data = [];
        $template = $this->StandarBiayaModel->get_all_standar_biaya();
        // echo $this->db->last_query();die;

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "No Rekening", "Nama", "Nominal Standar Biaya");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        if ($template->num_rows() > 0) {
            $excel_row = 2;

            foreach ($template->result() as $row) {
                $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id_standar_biaya);
                $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->no_rekening_standar_biaya);
                $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nama_standar_biaya);
                $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->jumlah_standar_biaya);
                $excel_row++;
            }
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Template Import Standar Biaya.xls"');

        $object_writer->save('php://output');
    }

    public function doImport()
    {
        $response = new stdClass;
        $response->token = $this->security->get_csrf_hash();

        $fileName = strtolower(str_replace(' ', '_', $_FILES['file']['name']));
        $exp = explode('.', $fileName);
        $fileName = $exp[0] . '_' . date('his') . rand(0000, 9999) . '.' . $exp[1];

        $config['upload_path'] = 'uploads/';
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            $response->resMsg = 'Error : ' . trim($this->upload->display_errors());
            echo json_encode($response);
            die;
        }

        $inputFileName = 'uploads/' . $fileName;

        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $sheet              = $objPHPExcel->getSheet(0);
        $highestRow         = $sheet->getHighestRow();
        $highestColumn      = $sheet->getHighestColumn();

        $rowIndex = $sheet->rangeToArray('A1:' . $highestColumn . '1', NULL, TRUE, FALSE);
        $idRow = $rowIndex[0][0];
        $rekRow = $rowIndex[0][1];
        $namaRow = $rowIndex[0][2];
        $biayaRow = $rowIndex[0][3];

        if ($idRow != "Id" && $rekRow != "No Rekening" && $namaRow != "Nama" && $biayaRow != "Nominal Standar Biaya") {
            $response->resMsg = 'Format template yang digunakan tidak sesuai';
            echo json_encode($response);
            die;
        }

        $list_import = [];
        for ($row = 2; $row <= $highestRow; $row++) {
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
            if ($rowData[0][0] != "" && $rowData[0][1] != "" && $rowData[0][2] != "" && $rowData[0][3] != "") {
                $data = array(
                    "id_standar_biaya" => $rowData[0][0],
                    "no_rekening_standar_biaya" => $rowData[0][1],
                    "nama_standar_biaya" => trim($rowData[0][2]),
                    "jumlah_standar_biaya" => preg_replace('/[^0-9]/', '', $rowData[0][3])
                );

                array_push($list_import, $data);
            }
        }

        $update = $this->StandarBiayaModel->edit_standar_biaya_by_id($list_import);

        $response->resCode  = '200';
        $response->resMsg   = 'Berhasil import data';

        echo json_encode($response);
    }
}
