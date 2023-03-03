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
        $this->db->select('nama_kegiatan, no_rekening_kegiatan, uuid_kegiatan, parent_kegiatan, flag');
        
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

        // $this->db->where('parent_kegiatan', null);
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

    function get_kegiatan_by_uuid($uuid) 
    {
        $this->db->select('mst_kegiatan.uuid_kegiatan, mst_kegiatan.nama_kegiatan, mst_kegiatan.no_rekening_kegiatan, mst_kegiatan.flag, b.uuid_kegiatan as child_uuid_kegiatan, b.nama_kegiatan as nama_child');
        $this->db->join('mst_kegiatan b', 'b.uuid_kegiatan = mst_kegiatan.parent_kegiatan', 'left');
        $data = $this->db->get_where('mst_kegiatan', ['mst_kegiatan.uuid_kegiatan' => $uuid]);

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

    function get_kegiatan_terkait_by_norek($norek)
    {
        $this->db->select('*');
        $this->db->like('no_rekening_kegiatan', $norek, 'after')->where('flag', '1');
        $this->db->order_by('no_rekening_kegiatan', 'ASC');
        $data = $this->db->get('mst_kegiatan');

        return $data;
    }

    function get_total_kegiatan_by_norek($norek)
    {
        $this->db->select('SUM(b.total_belanja) total_belanja');
        $this->db->like('no_rekening_kegiatan', $norek, 'after')->where('flag', '1')
                ->join('rincian_belanja b', 'b.uuid_kegiatan = mst_kegiatan.uuid_kegiatan', 'left');
        $this->db->order_by('no_rekening_kegiatan', 'ASC');
        $data = $this->db->get('mst_kegiatan');

        return $data;
    }

}