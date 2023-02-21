<?php

Class TahunAnggaranModel extends CI_Model {
    function simpan_tahun_anggaran($data)
    {
        $this->db->set('uuid_tahun_anggaran', 'UUID()', FALSE);
        $data = $this->db->insert('mst_tahun_anggaran', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('nama_tahun_anggaran, budget_tahun_anggaran, uuid_tahun_anggaran, flag');
        if ($filter['search'] != '') {
            $this->db->like('nama_tahun_anggaran', $filter['search'], 'both');
        }

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('nama_tahun_anggaran', 'desc');
        $data = $this->db->get('mst_tahun_anggaran');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_tahun_anggaran', $filter['search'], 'both');
        }
        $data = $this->db->select('nama_tahun_anggaran')->from('mst_tahun_anggaran')->count_all_results();

        return $data;
    }

    function get_anggaran_by_uuid($uuid) 
    {
        $this->db->select('uuid_tahun_anggaran, nama_tahun_anggaran, budget_tahun_anggaran, flag');
        $data = $this->db->get_where('mst_tahun_anggaran', ['uuid_tahun_anggaran' => $uuid]);

        return $data;
    }

    function edit_anggaran_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_tahun_anggaran", $uuid)->update("mst_tahun_anggaran", $data);

        return $update;
    }

    function hapus_anggaran_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_tahun_anggaran", $uuid)->delete('mst_tahun_anggaran');

        return $hapus;
    }
}