<?php

class BelanjaModel extends CI_Model
{

    function simpan_belanja($data)
    {
        $this->db->set('uuid_belanja', 'UUID()', FALSE);
        $data = $this->db->insert('rincian_belanja', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('mst_kegiatan.nama_kegiatan, mst_kegiatan.no_rekening_kegiatan, mst_kegiatan.uuid_kegiatan, mst_kegiatan.flag');
        if ($filter['limit'] > 0) {
            $limit = $filter['limit'];
            if (isset($filter['start']) && !empty($filter['start'])) {
                $offset = ($filter['start'] * $limit) - 10;
            }
        }

        if (isset($filter['parent_kegiatan']) && $filter['parent_kegiatan'] != '') {
            $this->db->where('mst_kegiatan.parent_kegiatan', $filter['parent_kegiatan']);
        }

        if (isset($filter['uuid_kegiatan']) && $filter['uuid_kegiatan'] != '') {
            $this->db->where('mst_kegiatan.uuid_kegiatan', $filter['uuid_kegiatan']);
        }

        if (isset($filter['search']) && $filter['search'] != '') {
            $this->db->like('mst_kegiatan.nama_kegiatan', $filter['search'], 'both');
        }

        $this->db->where('mst_kegiatan.parent_kegiatan', null);
        $this->db->or_where('mst_kegiatan.parent_kegiatan', '');
        $this->db->where('mst_kegiatan.flag', '1');
        // $this->db->or_like('parent_kegiatan', '-');
        if ($filter['limit'] > 0) {
            $this->db->limit($limit, isset($offset) ? $offset : 0);
        }
        $this->db->order_by('mst_kegiatan.no_rekening_kegiatan', 'asc');
        $data = $this->db->get('mst_kegiatan');

        return $data;
    }

    function get_all_data_sub_kegiatan($filter)
    {
        $this->db->select('d.nama_satuan as satuan_nama, c.nama_satuan, uuid_belanja, b.no_rekening_standar_biaya, b.jumlah_standar_biaya, b.nama_standar_biaya, tanggal_belanja, rincian_belanja.uuid_kegiatan, rincian_belanja.uuid_standar_biaya, koefisien_1, koefisien_2, volume_1, volume_2, pajak, total_belanja, keterangan');
        $this->db->join('mst_standar_biaya b', 'b.uuid_standar_biaya = rincian_belanja.uuid_standar_biaya', 'left');
        $this->db->join('mst_satuan d', 'b.satuan_harga = d.uuid_satuan', 'left');
        $this->db->join('mst_satuan c', 'c.uuid_satuan = rincian_belanja.volume_1', 'left');

        if ($filter['limit'] > 0) {
            $limit = $filter['limit'];
            if (isset($filter['start']) && !empty($filter['start'])) {
                $offset = ($filter['start'] * $limit) - 10;
            }
        }

        if (isset($filter['uuid_kegiatan']) && $filter['uuid_kegiatan'] != '') {
            $this->db->where('rincian_belanja.uuid_kegiatan', $filter['uuid_kegiatan']);
        }

        if ($this->session->userdata('level_user') != "1") {
            $this->db->where("uuid_user", $this->session->userdata('uuid_user'));
        }

        if (isset($filter['search']) && $filter['search'] != '') {
            $this->db->like('b.nama_standar_biaya', $filter['search'], 'both');
        }

        if ($filter['limit'] > 0) {
            $this->db->limit($limit, isset($offset) ? $offset : 0);
        }
        $this->db->order_by('b.no_rekening_standar_biaya', 'ASC');
        $data = $this->db->get('rincian_belanja');

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

        // if ($this->session->userdata('level_user') != "1") {
        //     $this->db->where("uuid_user", $this->session->userdata('uuid_user'));
        // }
        $data = $this->db->select('nama_kegiatan')->from('mst_kegiatan')->count_all_results();

        return $data;
    }

    function get_total_data_sub_kegiatan($filter)
    {
        if (isset($filter['search']) && $filter['search'] != '') {
            $this->db->like('nama_kegiatan', $filter['search'], 'both');
        }

        $this->db->where('uuid_kegiatan', $filter['uuid_kegiatan']);
        $data = $this->db->select('nama_kegiatan')->from('rincian_belanja')->count_all_results();

        return $data;
    }

    function get_belanja_by_uuid($uuid)
    {
        $this->db->select('a.uuid_belanja, a.tanggal_belanja, a.uuid_kegiatan, a.uuid_standar_biaya, a.koefisien_1, a.volume_1, a.volume_2, a.pajak, a.keterangan, a.uuid_user, a.edited, a.total_belanja, b.nama_kegiatan, c.nama_standar_biaya, c.jumlah_standar_biaya, d.nama_satuan, e.nama_satuan as satuan_belanja');
        $this->db->join('mst_kegiatan b', 'b.uuid_kegiatan = a.uuid_kegiatan', 'left');
        $this->db->join('mst_standar_biaya c', 'c.uuid_standar_biaya = a.uuid_standar_biaya', 'left');
        $this->db->join('mst_satuan d', 'd.uuid_satuan = a.volume_1', 'left');
        $this->db->join('mst_satuan e', 'c.satuan_harga = d.uuid_satuan', 'left');
        $data = $this->db->get_where('rincian_belanja a', ['uuid_belanja' => $uuid]);

        return $data;
    }

    function edit_belanja_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_belanja", $uuid)->update("rincian_belanja", $data);

        return $update;
    }

    function hapus_belanja_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_belanja", $uuid)->delete('rincian_belanja');

        return $hapus;
    }

    function get_total_belanja_sub_kegiatan($filter) 
    {
        $this->db->where('uuid_kegiatan', $filter['uuid_kegiatan']);

        if ($this->session->userdata('level_user') != "1") {
            $this->db->where("uuid_user", $this->session->userdata('uuid_user'));
        }

        $data = $this->db->select('SUM(total_belanja) as total_belanja')->from('rincian_belanja')->get()->row();

        return $data;
    }

    function get_total_belanja_prodi()
    {
        if ($this->session->userdata('level_user') != "1") {
            $this->db->where("uuid_user", $this->session->userdata('uuid_user'));
        }

        $data = $this->db->select('SUM(total_belanja) as total_belanja')->from('rincian_belanja')->get()->row();

        return $data;
    }

    function get_total_rincian_belanja()
    {
        $data = $this->db->select("SUM(total_belanja) as total_belanja")
        ->where("tahun_anggaran", $this->session->userdata("anggaran"))
        ->get("rincian_belanja")->row();

        return $data;
    }
}
