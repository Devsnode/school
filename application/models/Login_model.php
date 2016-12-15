<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_valid_user_count($username, $password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('user_name', $username);
        $this->db->where('password', $password);
        $result = $this->db->get()->num_rows();
        return $result;
    }

    public function get_user_details($username, $password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('user_name', $username);
        $this->db->where('password', $password);
        $result = $this->db->get()->row();
        return $result;
    }

}
