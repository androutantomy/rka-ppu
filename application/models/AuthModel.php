<?php

class AuthModel extends CI_Model {
    function get_all_active_tahun_anggaran()
    {
        $data = $this->db->where("flag", "1")->limit(5)->order_by('id_tahun_anggaran', 'desc')->get("mst_tahun_anggaran");

        return $data;
    }

    function get_user_by_username($filter)
    {
        $data = $this->db->get_where("mst_users", $filter);

        return $data;
    }
}