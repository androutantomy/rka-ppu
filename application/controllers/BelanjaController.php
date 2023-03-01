<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BelanjaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('BelanjaModel');
        $this->load->model('SubKegiatanModel');
        $this->load->model('KegiatanModel');
        $this->load->model('StandarBiayaModel');
        $this->load->model('UserModel');
    }

    public function index()
    {
        $start = $this->route->param('start') != "" ? $this->route->param('start') : 1;
        $search = str_replace('%20', ' ', $this->route->param('search'));
        $prodi_value = $this->route->param('prodi') == "" ? '-' : $this->route->param('prodi');
        $filter = [
            'start' => $start,
            'limit' => 10,
            'search' => $search,
            'uuid_user' => $prodi_value
        ];


        $datatable = $this->BelanjaModel->get_all_data($filter);
        $total =  $this->BelanjaModel->get_total_data($filter);
        if ($total > 0) {
            foreach ($datatable->result() as $parent) {
                $filter['parent'] = $parent->uuid_kegiatan;
                $parent->child = $this->SubKegiatanModel->get_all_data($filter)->result();
                if (!empty($parent->child)) {
                    foreach ($parent->child as $child) {
                        $filter2 = [
                            'uuid_kegiatan' => $child->uuid_kegiatan,
                            'uuid_user' => $prodi_value
                        ];
                        $child->total_rincian = $this->SubKegiatanModel->get_total_belanja_by_id_kegiatan($filter2);
                    }
                }
            }
        }
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
        $data['rincian_belanja'] = get_list_total_anggaran();
        $data['admin_prodi'] = $this->UserModel->get_all_admin_prodi();
        $data['prodi_value'] = $prodi_value;

        $this->load->view('dashboard/belanja/index', $data);
    }

    function add()
    {
        $this->load->view('dashboard/belanja/add');
    }

    function edit()
    {
        $this->load->view('dashboard/belanja/edit');
    }

    function detail()
    {
        $uuid = $this->route->param('uuid');
        $start = $this->route->param('start') != "" ? $this->route->param('start') : 1;
        $search = str_replace('%20', ' ', $this->route->param('search'));
        $filter = [
            'start' => $start,
            'limit' => 10,
            'search' => $search,
            'uuid_kegiatan' => $uuid
        ];


        $datatable = $this->BelanjaModel->get_all_data_sub_kegiatan($filter);
        $total =  $this->BelanjaModel->get_total_data_sub_kegiatan($filter);
        $total_belanja = $this->BelanjaModel->get_total_belanja_sub_kegiatan($filter);
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
        $data['data'] = $this->KegiatanModel->get_kegiatan_by_uuid($uuid);
        $data['total_belanja'] = $total_belanja;

        $this->load->view('dashboard/belanja/detail', $data);
    }

    function cetak()
    {
        $uuid = $this->route->param('uuid');
        $filter = [
            'limit' => 0,
            'uuid_kegiatan' => $uuid
        ];

        $get_kegiatan = $this->KegiatanModel->get_kegiatan_by_uuid($uuid);
        $norek = explode('.', $get_kegiatan->row()->no_rekening_kegiatan);
        $get_kegiatan_terkait = $this->KegiatanModel->get_kegiatan_terkait_by_norek($norek[0]);
        $total_belanja = $this->BelanjaModel->get_total_belanja_sub_kegiatan($filter);

        if ($get_kegiatan_terkait->num_rows() > 0) {
            foreach ($get_kegiatan_terkait->result() as $kegiatan) {
                $filter['uuid_kegiatan'] = $kegiatan->uuid_kegiatan;
                $kegiatan->belanja = $this->BelanjaModel->get_all_data_sub_kegiatan($filter)->result();
            }
        }

        $data['datatabel'] = $get_kegiatan_terkait;
        $data['data'] = $this->KegiatanModel->get_kegiatan_by_uuid($uuid);
        $data['total_belanja'] = $total_belanja;

        $this->load->view('dashboard/belanja/cetak', $data);
    }


    function doGetKomponen()
    {
        $res = new stdClass;
        $list = [];
        $key = 0;
        $filter = [
            'search' => $this->input->post('query'),
            'limit' => 10,
        ];

        $res->newToken = $this->security->get_csrf_hash();
        $datatable = $this->StandarBiayaModel->get_all_data($filter);

        if ($datatable->num_rows() > 0) {
            foreach ($datatable->result() as $result) {
                $list[$key]['text'] = $result->nama_standar_biaya;
                $list[$key]['id'] = $result->uuid_standar_biaya;
                $key++;
            }
        }

        $res->listSatuan = $list;

        echo json_encode($res);
    }

    function doGetBiayaByUuid()
    {
        $res = new stdClass;
        $harga = 'Rp. 0';
        $satuan = '-';
        $uuid = $this->input->post('uuid');

        $standarBiaya = $this->StandarBiayaModel->get_standar_biaya_by_uuid($uuid);

        if (!empty($standarBiaya->row())) {
            $harga = $standarBiaya->row()->jumlah_standar_biaya != "" ? 'Rp. ' . number_format($standarBiaya->row()->jumlah_standar_biaya, 0, '.', ',') : $harga;
            $satuan = $standarBiaya->row()->nama_satuan != "" ? $standarBiaya->row()->nama_satuan : $satuan;
        }

        $data = new stdClass;
        $data->harga = $harga;
        $data->satuan = $satuan;

        $res->data = $data;
        $res->newToken = $this->security->get_csrf_hash();

        echo json_encode($res);
    }

    function doSimpan()
    {
        $res = new stdClass;
        $res->status = '00';
        $res->newToken = $this->security->get_csrf_hash();
        $pajak = $this->config->item('ppn');

        if ($this->input->post('tanggal_belanja') == '') {
            $res->message = 'Tanggal Belanja tidak boleh kosong';
            echo json_encode($res);
            die;
        }

        if ($this->input->post('komponen') == '') {
            $res->message = 'Komponen tidak boleh kosong';
            echo json_encode($res);
            die;
        }

        if ($this->input->post('pajak') == '') {
            $res->message = 'Pajak tidak boleh kosong';
            echo json_encode($res);
            die;
        }

        if ($this->input->post('koefisien_1') == '' || $this->input->post('koefisien_1') == '0') {
            $res->message = 'Koefisien tidak boleh kosong atau 0';
            echo json_encode($res);
            die;
        }

        if ($this->input->post('koefisien_2') != '' && $this->input->post('volume_2') == '') {
            $res->message = 'Koefisien 2 tidak boleh kosong';
            echo json_encode($res);
            die;
        }

        if ($this->input->post('koefisien_2') == '' && $this->input->post('volume_2') != '') {
            $res->message = 'Volume 2 tidak boleh kosong';
            echo json_encode($res);
            die;
        }

        if ($this->input->post('volume_1') == '' || $this->input->post('volume_1') == '0') {
            $res->message = 'Volume tidak boleh kosong atau 0';
            echo json_encode($res);
            die;
        }

        $total = 0;
        $standarBiaya = $this->StandarBiayaModel->get_standar_biaya_by_uuid($this->input->post('komponen'));
        if (!empty($standarBiaya->row())) {
            $harga = $standarBiaya->row()->jumlah_standar_biaya != "" ? $standarBiaya->row()->jumlah_standar_biaya : 0;
            if ($harga == 0) {
                $res->message = 'Komponen yang dipilih belum memiliki harga';
                echo json_encode($res);
                die;
            }

            $total = $harga * $this->input->post('koefisien_1');
            if ($this->input->post('koefisien_2') != "") {
                $total = $total * $this->input->post('koefisien_2');
            }

            if ($this->input->post('pajak') == '1') {
                $total_ppn = ($pajak / 100) * $total;
                $total = $total + $total_ppn;
            }
        }

        $data = [
            'tanggal_belanja' => $this->input->post('tanggal_belanja'),
            'uuid_kegiatan' => $this->input->post('uuid_kegiatan'),
            'uuid_standar_biaya' => $this->input->post('komponen'),
            'pajak' => $this->input->post('pajak'),
            'koefisien_1' => $this->input->post('koefisien_1'),
            'koefisien_2' => $this->input->post('koefisien_2'),
            'volume_1' => $this->input->post('volume_1'),
            'volume_2' => $this->input->post('volume_2'),
            'keterangan' => $this->input->post('keterangan'),
            'uuid_user' => $this->session->userdata('uuid_user'),
            'edited' => $this->input->post('uuid_rincian_belanja') != "" && $this->session->userdata('level_user') != "1" ? "1" : "0",
            'total_belanja' => $total,
            'tahun_anggaran' => $this->session->userdata('anggaran')
        ];

        if ($this->input->post('uuid_rincian_belanja') == '') {
            $simpan = $this->BelanjaModel->simpan_belanja($data);
        } else {
            $simpan = $this->BelanjaModel->edit_belanja_by_uuid($data, $this->input->post('uuid_rincian_belanja'));
        }

        if (!$simpan) {
            $res->message = 'Gagal simpan data';
            echo json_encode($res);
            die;
        }

        $res->status = '200';
        $res->url = site_url('belanja/detail/' . $this->input->post('uuid_kegiatan'));
        echo json_encode($res);
    }

    public function doHapus()
    {
        $uuid = $this->input->post('uuid_data');
        $query = $this->input->post('query');
        $start = $this->input->post('offset');
        $uuid_kegiatan = $this->input->post('uuid_kegiatan');

        if ($this->input->post('uuid_data') == "") {
            route_redirect('belanja.detail2', ['uuid' => $uuid_kegiatan, 'start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Uuid Belanja Kegiatan tidak valid']);
        }

        $hapus = $this->BelanjaModel->hapus_belanja_by_uuid($uuid);

        if (!$hapus) {
            route_redirect('belanja.detail2', ['uuid' => $uuid_kegiatan, 'start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['error' => 'Gagal hapus data']);
        }

        route_redirect('belanja.detail2', ['uuid' => $uuid_kegiatan, 'start' => $start != '' ? $start : '', 'search' => $query != '' ? $query : ''], ['message' => 'Berhasil hapus data']);
    }

    function doGetDetailUpdate()
    {
        $res = new stdClass;
        $res->status = '00';
        $res->newToken = $this->security->get_csrf_hash();
        $uuid_belanja = $this->input->post('uuid_belanja');

        $update = $this->BelanjaModel->get_belanja_by_uuid($uuid_belanja);
        $row = $update->row();
        if (!empty($row)) {
            $row->jumlah_standar_biaya = number_format($row->jumlah_standar_biaya, 0, '.', ',');
        }

        $res->data = $row;
        $res->status = '200';
        echo json_encode($res);
    }
}
