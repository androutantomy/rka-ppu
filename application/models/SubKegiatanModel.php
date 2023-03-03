<?php

class SubKegiatanModel extends CI_Model
{

    function simpan_kegiatan($data)
    {
        $this->db->set('uuid_kegiatan', 'UUID()', FALSE);
        $data = $this->db->insert('mst_kegiatan', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('nama_kegiatan, no_rekening_kegiatan, uuid_kegiatan, flag');
        if (isset($filter['search']) && $filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }

        if (isset($filter['limit']) && $filter['limit'] > 0) {
            $limit = $filter['limit'];
            if (isset($filter['start']) && !empty($filter['start'])) {
                $offset = ($filter['start'] * $limit) - 10;
            }
        }

        $this->db->where('parent_kegiatan', $filter['parent']);
        if ($filter['limit'] > 0) {
            $this->db->limit($limit, isset($offset) ? $offset : 0);
        }
        $this->db->where('flag', '1');
        $this->db->order_by('no_rekening_kegiatan', 'asc');
        $data = $this->db->get('mst_kegiatan');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }

        $this->db->where('parent_kegiatan', $filter['parent']);
        $data = $this->db->select('nama_kegiatan')->from('mst_kegiatan')->count_all_results();

        return $data;
    }

    function get_total_belanja_by_id_kegiatan($filter)
    {
        $uuid_user = $this->session->userdata('uuid_user');
        if (isset($filter['uuid_user']) && $filter['uuid_user'] != '-') {
            $uuid_user = $filter['uuid_user'];
        }

        $this->db->where('uuid_user', $uuid_user);
        $data = $this->db->select("SUM(total_belanja) as total_rincian")
        ->get_where('rincian_belanja', 
        ['tahun_anggaran' => $this->session->userdata('anggaran'),
        'uuid_kegiatan' => $filter['uuid_kegiatan']])->row();

        $res = 0;
        if (!empty($data)) {
            $res = $data->total_rincian;
        }
        return $res;
    }
}
