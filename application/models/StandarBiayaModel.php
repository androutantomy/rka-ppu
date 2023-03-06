<?php

Class StandarBiayaModel extends CI_Model {
    
    function simpan_standar_biaya($data)
    {
        $this->db->set('uuid_standar_biaya', 'UUID()', FALSE);
        $data = $this->db->insert('mst_standar_biaya', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('uuid_standar_biaya, no_rekening_standar_biaya, is_utama, nama_standar_biaya, flag, jumlah_standar_biaya');
        if ($filter['search'] != '') {
            $this->db->like('nama_standar_biaya', $filter['search'], 'both');
        }

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('no_rekening_standar_biaya', 'ASC');
        $data = $this->db->get('mst_standar_biaya');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_standar_biaya', $filter['search'], 'both');
        }
        $data = $this->db->select('nama_standar_biaya')->from('mst_standar_biaya')->count_all_results();

        return $data;
    }

    function get_standar_biaya_by_uuid($uuid) 
    {
        $this->db->select('uuid_standar_biaya, no_rekening_standar_biaya, is_utama, nama_standar_biaya, mst_standar_biaya.flag, b.nama_satuan, jumlah_standar_biaya, satuan_harga');
        $this->db->join('mst_satuan b', 'mst_standar_biaya.satuan_harga = b.uuid_satuan', 'left');
        $data = $this->db->get_where('mst_standar_biaya', ['uuid_standar_biaya' => $uuid]);

        return $data;
    }

    function edit_standar_biaya_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_standar_biaya", $uuid)->update("mst_standar_biaya", $data);

        return $update;
    }

    function edit_standar_biaya_by_id($data)
    {
        $update = $this->db->update_batch("mst_standar_biaya", $data, "id_standar_biaya");

        return $update;
    }

    function hapus_standar_biaya_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_standar_biaya", $uuid)->delete('mst_standar_biaya');

        return $hapus;
    }

    function check_existing_norek($filter)
    {
        if (isset($filter['kode_rekening'])) {
            $this->db->where('no_rekening_standar_biaya', $filter['kode_rekening']);
        }

        if (isset($filter['uuid_standar_biaya'])) {
            $this->db->not_like('uuid_standar_biaya', $filter['uuid_standar_biaya']);
        }

        $data = $this->db->from('mst_standar_biaya')->count_all_results();

        return $data;
    }

    function get_all_standar_biaya()
    {
        $this->db->select('id_standar_biaya, no_rekening_standar_biaya, nama_standar_biaya, jumlah_standar_biaya');
        $this->db->where('is_utama IS NULL')->where('flag', '1')->order_by('no_rekening_standar_biaya', 'ASC');
        $get = $this->db->get('mst_standar_biaya');

        return $get;
    }
}