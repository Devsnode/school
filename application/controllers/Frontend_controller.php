<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('General_model');
    }

    public function index($page_name) {
        echo $page_name;
        exit;
        $data['title'] = 'Welcome';
        $data['pages'] = $this->General_model->getTableData('pages');
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function about_school() {
        $data['title'] = 'About';
        $data['pages'] = $this->General_model->getTableData('pages');
        $this->load->view('header', $data);
        $this->load->view('about_school');
        $this->load->view('footer');
    }

    public function administration() {
        $data['title'] = 'Administration';
        $data['pages'] = $this->General_model->getTableData('pages');
        $this->load->view('header', $data);
        $this->load->view('administration');
        $this->load->view('footer');
    }

    public function students_info() {
        $data['title'] = 'Students Information';
        $this->load->view('header', $data);
        $this->load->view('student_info');
        $this->load->view('footer');
    }

    public function daily_curriculum() {
        $data['title'] = 'Daily Curriculum';
        $this->load->view('header', $data);
        $this->load->view('daily_curriculum');
        $this->load->view('footer');
    }

    public function extra_curricular() {
        $data['title'] = 'Extra Curricular';
        $this->load->view('header', $data);
        $this->load->view('extra_curricular');
        $this->load->view('footer');
    }

    public function results() {
        $data['title'] = 'Results';
        $data['pages'] = $this->General_model->getTableData('pages');
        $this->load->view('header', $data);
        $this->load->view('results');
        $this->load->view('footer');
    }

    public function gallery() {
        $data['title'] = 'Gallery';
        $data['pages'] = $this->General_model->getTableData('pages');
        $this->load->view('header', $data);
        $this->load->view('gallery');
        $this->load->view('footer');
    }

    public function get_page($page = '') {
        $page = $page == '' ? 'home' : $page;
        $pageCount = $this->General_model->get_page_count($page);
        if ($pageCount == 1) {
            $pageId = $this->General_model->get_page_id($page);
            $data['page_content'] = $this->General_model->get_page_data($pageId);
            $data['pages'] = $this->General_model->getTableData('pages');
            $data['title'] = ucfirst($page);
            $this->load->view('header', $data);
            $this->load->view($page);
            $this->load->view('footer');
        } else {
            
        }
    }

}
