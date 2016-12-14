<?php

class General_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert($table, $data) {
        $this->db->insert($table, $data);
        return TRUE;
    }

    public function getTableData($table_name) {
        $result = $this->db->get($table_name);
        return $result;
    }

    public function getEditData($table_name, $id) {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('id', $id);
        $result = $this->db->get()->row();
        return $result;
    }

    public function updateTableData($table, $field, $id, $data) {
        $this->db->where($field, $id);
        $this->db->update($table, $data);
        return TRUE;
    }

    public function check_exists($page) {
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('uri_segment', $page);
        $result = $this->db->get()->num_rows();
        return $result;
    }

    public function getPageData($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('has_sub_page', 1);
        $result = $this->db->get()->result();
        return $result;
    }

    public function getSubPageData($table, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('page_id', $id);
        $result = $this->db->get()->result();
        return $result;
    }

    public function getallPageData($table) {
        $this->db->select('*');
        $this->db->from($table);
        $result = $this->db->get()->result();
        return $result;
    }

    public function checkSubpageData($segment, $id) {
        $this->db->select('*');
        $this->db->from('subpages');
        $this->db->where('uri_segment', $segment);
        $this->db->where('page_id', $id);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function checkSingle_Page_ContentsData($id) {
        $this->db->select('*');
        $this->db->from('single_page_contents');
        $this->db->where('page_id', $id);
        $result = $this->db->get()->num_rows();
        return $result;
    }

    public function get_page_count($page) {
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('uri_segment', $page);
        $result = $this->db->get()->num_rows();
        return $result;
    }

    public function get_page_id($page) {
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('uri_segment', $page);
        $result = $this->db->get()->row()->id;
        return $result;
    }

    public function get_page_data($pageId) {
        $this->db->select('*');
        $this->db->from('single_page_contents');
        $this->db->where('page_id', $pageId);
        $result = $this->db->get()->row();
        return $result;
    }

}
