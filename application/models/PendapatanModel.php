<?php

Class PendapatanModel extends CI_Model {

    function simpan_pendapatan($data)
    {
        $this->db->set('uuid_pendapatan', 'UUID()', FALSE);
        $data = $this->db->insert('mst_pendapatan', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('uuid_pendapatan, no_rekening_pendapatan, is_utama, nama_pendapatan, flag, jumlah_pendapatan');
        if ($filter['search'] != '') {
            $this->db->like('nama_pendapatan', $filter['search'], 'both');
        }

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('no_rekening_pendapatan', 'ASC');
        $data = $this->db->get('mst_pendapatan');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_pendapatan', $filter['search'], 'both');
        }
        $data = $this->db->select('nama_pendapatan')->from('mst_pendapatan')->count_all_results();

        return $data;
    }

    function get_pendapatan_by_uuid($uuid) 
    {
        $this->db->select('uuid_pendapatan, no_rekening_pendapatan, is_utama, nama_pendapatan, flag, jumlah_pendapatan');
        $data = $this->db->get_where('mst_pendapatan', ['uuid_pendapatan' => $uuid]);

        return $data;
    }

    function edit_pendapatan_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_pendapatan", $uuid)->update("mst_pendapatan", $data);

        return $update;
    }

    function hapus_pendapatan_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_pendapatan", $uuid)->delete('mst_pendapatan');

        return $hapus;
    }

    function check_existing_norek($filter)
    {
        if (isset($filter['kode_rekening'])) {
            $this->db->where('no_rekening_pendapatan', $filter['kode_rekening']);
        }

        if (isset($filter['uuid_pendapatan'])) {
            $this->db->not_like('uuid_pendapatan', $filter['uuid_pendapatan']);
        }

        $data = $this->db->from('mst_pendapatan')->count_all_results();

        return $data;
    }

}