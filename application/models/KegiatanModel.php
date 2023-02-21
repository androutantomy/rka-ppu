<?php 

Class KegiatanModel extends CI_model {

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
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('no_rekening_kegiatan', 'asc');
        $data = $this->db->get('mst_kegiatan');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }
        $data = $this->db->select('nama_kegiatan')->from('mst_kegiatan')->count_all_results();

        return $data;
    }

    function get_kegiatan_by_uuid($uuid) 
    {
        $this->db->select('uuid_kegiatan, nama_kegiatan, no_rekening_kegiatan, flag');
        $data = $this->db->get_where('mst_kegiatan', ['uuid_kegiatan' => $uuid]);

        return $data;
    }

    function edit_kegiatan_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_kegiatan", $uuid)->update("mst_kegiatan", $data);

        return $update;
    }

    function hapus_kegiatan_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_kegiatan", $uuid)->delete('mst_kegiatan');

        return $hapus;
    }

    function check_existing_norek($filter)
    {
        if (isset($filter['kode_rekening'])) {
            $this->db->where('no_rekening_kegiatan', $filter['kode_rekening']);
        }

        if (isset($filter['uuid_kegiatan'])) {
            $this->db->not_like('uuid_kegiatan', $filter['uuid_kegiatan']);
        }

        $data = $this->db->from('mst_kegiatan')->count_all_results();

        return $data;
    }

}