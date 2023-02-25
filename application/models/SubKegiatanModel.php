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
        if ($filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start'] * $limit) - 10;
        }

        $this->db->where('parent_kegiatan', $filter['parent']);
        $this->db->limit($limit, isset($offset) ? $offset : 0);
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
}
