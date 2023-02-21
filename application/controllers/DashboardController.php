<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AktifitasModel');
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

        $datatable = $this->AktifitasModel->get_all_data($filter);

        $data['datatabel'] = $datatable;
        $data['total'] = $this->AktifitasModel->get_total_data($filter);
        $data['start'] = $start;
        $data['search'] = $search;

        $this->load->view('dashboard/index', $data);
    }
    
}
