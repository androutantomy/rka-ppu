<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SubKegiatanController extends CI_Controller
{
    /**
     * Luthier CI fake index method
     */
    public function index()
    {
        // $start = $this->route->param('start') != "" ? $this->route->param('start') : 1;
        // $search = str_replace('%20', ' ', $this->route->param('search'));
        // $filter = [
        //     'start' => $start,
        //     'limit' => 10,
        //     'search' => $search
        // ];

        
        // $datatable = $this->KegiatanModel->get_all_data($filter);
        // $total =  $this->KegiatanModel->get_total_data($filter);
        // $num_of_pages = ceil($total / 10);
        // $next = $start+1 <= $num_of_pages ? $start+1 : '';
        // $prev = $start-1 <= $num_of_pages ? $start-1 : '';

        // $data['datatabel'] = $datatable;
        // $data['total'] = $total;
        // $data['start'] = $start;
        // $data['search'] = $search;
        // $data['num_of_pages'] = $num_of_pages;
        // $data['next'] = $next;
        // $data['prev'] = $prev;

        $this->load->view('dashboard/subkegiatan/index');
    }
    
    function add()
    {
        $this->load->view('dashboard/subkegiatan/add');
    }
    
    function edit()
    {
        $this->load->view('dashboard/subkegiatan/edit');
    }
    
}
