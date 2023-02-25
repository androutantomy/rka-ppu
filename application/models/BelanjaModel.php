<?php

Class BelanjaModel extends CI_Model 
{

    function simpan_belanja($data)
    {
        $this->db->set('uuid_belanja', 'UUID()', FALSE);
        $data = $this->db->insert('mst_belanja', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('nama_kegiatan, no_rekening_kegiatan, uuid_kegiatan, flag');
        
        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        
        if (isset($filter['parent_kegiatan']) && $filter['parent_kegiatan'] != '') {
            $this->db->where('parent_kegiatan', $filter['parent_kegiatan']);
        }
        
        if (isset($filter['search']) && $filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }

        $this->db->where('parent_kegiatan', null);
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('no_rekening_kegiatan', 'asc');
        $data = $this->db->get('mst_kegiatan');

        return $data;
    }

    function get_total_data($filter)
    {
        if (isset($filter['search']) && $filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }

        if (isset($filter['parent_kegiatan']) && $filter['parent_kegiatan'] != '') {
            $this->db->where('parent_kegiatan', $filter['parent_kegiatan']);
        }
        $data = $this->db->select('nama_kegiatan')->from('mst_kegiatan')->count_all_results();

        return $data;
    }

    function get_anggaran_by_uuid($uuid) 
    {
        $this->db->select('uuid_belanja, nama_belanja, budget_belanja, flag, anggaran_prodi, akhir_input_anggaran');
        $data = $this->db->get_where('mst_belanja', ['uuid_belanja' => $uuid]);

        return $data;
    }

    function edit_anggaran_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_belanja", $uuid)->update("mst_belanja", $data);

        return $update;
    }

    function hapus_anggaran_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_belanja", $uuid)->delete('mst_belanja');

        return $hapus;
    }

}