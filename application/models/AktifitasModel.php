<?php

Class AktifitasModel extends CI_Model {

    function simpan_aktifitas($data) 
    {
        $data = $this->db->insert('log_aktifitas', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('routes_aktifitas, nama_pengguna, role_pengguna, tanggal, keterangan');
        if ($filter['search'] != '') {
            $this->db->group_start();
            $this->db->like('keterangan', $filter['search'], 'both');
            $this->db->or_like('nama_pengguna', $filter['search'], 'both');
            $this->db->or_like('role_pengguna', $filter['search'], 'both');
            $this->db->group_end();
        }

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('id_aktifitas', 'desc');
        $data = $this->db->get('log_aktifitas');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->group_start();
            $this->db->like('keterangan', $filter['search'], 'both');
            $this->db->or_like('nama_pengguna', $filter['search'], 'both');
            $this->db->or_like('role_pengguna', $filter['search'], 'both');
            $this->db->group_end();
        }
        $data = $this->db->select('nama_pengguna')->from('log_aktifitas')->count_all_results();

        return $data;
    }
}