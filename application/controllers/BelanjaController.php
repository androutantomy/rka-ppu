<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BelanjaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('BelanjaModel');
        $this->load->model('SubKegiatanModel');
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

        
        $datatable = $this->BelanjaModel->get_all_data($filter);
        $total =  $this->BelanjaModel->get_total_data($filter);
        if ($total > 0) {
            foreach ($datatable->result() as $parent) {
                $filter['parent'] = $parent->uuid_kegiatan;
                $parent->child = $this->SubKegiatanModel->get_all_data($filter)->result();
            }
        }
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
        $this->load->view('dashboard/belanja/detail');
    }
    
    function cetak()
    {
        $this->load->view('dashboard/belanja/cetak');
    }
    
}
