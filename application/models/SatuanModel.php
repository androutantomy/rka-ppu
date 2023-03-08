<?php 

Class SatuanModel extends CI_Model {
    function simpan_satuan($data)
    {
        $this->db->set('uuid_satuan', 'UUID()', FALSE);
        $data = $this->db->insert('mst_satuan', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('uuid_satuan, nama_satuan, flag');
        if ($filter['search'] != '') {
            $this->db->like('nama_satuan', $filter['search'], 'both');
        }

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('id_satuan', 'desc');
        $data = $this->db->get('mst_satuan');

        return $data;
    }

    function get_all_data_no_limit()
    {
        $this->db->select('uuid_satuan, nama_satuan, flag');
        
        $this->db->order_by('id_satuan', 'desc');
        $data = $this->db->get('mst_satuan');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_satuan', $filter['search'], 'both');
        }
        $data = $this->db->select('nama_satuan')->from('mst_satuan')->count_all_results();

        return $data;
    }

    function get_satuan_by_uuid($uuid) 
    {
        $this->db->select('uuid_satuan, nama_satuan, flag');
        $data = $this->db->get_where('mst_satuan', ['uuid_satuan' => $uuid]);

        return $data;
    }

    function edit_satuan_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_satuan", $uuid)->update("mst_satuan", $data);

        return $update;
    }

    function hapus_satuan_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_satuan", $uuid)->delete('mst_satuan');

        return $hapus;
    }
}