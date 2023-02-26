<?php

Class UserModel extends CI_Model
{
    function simpan_user($data)
    {
        $this->db->set('uuid_user', 'UUID()', FALSE);
        $data = $this->db->insert('mst_users', $data);

        return $data;
    }

    function get_all_data($filter)
    {
        $this->db->select('id_user, nama_user, nama_level, email_user, uuid_user, flag');
        if ($filter['search'] != '') {
            $this->db->like('nama_user', $filter['search'], 'both');
        }
        // print_r($filter);die;

        $limit = $filter['limit'];
        if (isset($filter['start']) && !empty($filter['start'])) {
            $offset = ($filter['start']*$limit)-10;
        }
        $this->db->limit($limit, isset($offset)?$offset:0);
        $this->db->order_by('id_user', 'desc');

        $data = $this->db->get('mst_users');

        return $data;
    }

    function get_total_data($filter)
    {
        if ($filter['search'] != '') {
            $this->db->like('nama_user', $filter['search'], 'both');
        }
        $data = $this->db->select('id_user')->from('mst_users')->count_all_results();

        return $data;
    }

    function get_user_by_uuid($uuid) 
    {
        $this->db->select('uuid_user, nama_user, email_user, username, level_user, nama_level, flag');
        $data = $this->db->get_where('mst_users', ['uuid_user' => $uuid]);

        return $data;
    }

    function edit_user_by_uuid($data, $uuid)
    {
        $update = $this->db->where("uuid_user", $uuid)->update("mst_users", $data);

        return $update;
    }

    function hapus_user_by_uuid($uuid)
    {
        $hapus = $this->db->where("uuid_user", $uuid)->delete('mst_users');

        return $hapus;
    }

    function get_all_admin_prodi()
    {
        $data = $this->db->select("uuid_user, nama_user")->where("level_user", "2")->get("mst_users");

        return $data;
    }
}