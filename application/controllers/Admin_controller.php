<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('is_admin_login')) {
            redirect(base_url('/'));
        }

        $this->load->library('form_validation');
        $this->load->model('Login_model');
        $this->load->model('General_model');
    }

    public function index() {
        $data['page_name'] = 'Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function add_school() {
        $data['page_name'] = 'Add School';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_school');
        $this->load->view('admin/footer');
    }

    public function add_school_action() {
        $this->form_validation->set_rules('school_name', 'SchoolName', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">School Name Can Not Be Empty!</div>');
            redirect(base_url('admin/add-school'));
        } else {
            $data['school_name'] = $this->input->post('school_name');
            $is_insert = $this->General_model->insert('school_details', $data);

            if ($is_insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">School Added Successfully</div>');
                redirect(base_url('admin/add-school'));
            }
        }
    }

    public function show_school() {
        $data['page_name'] = 'School Page';
        $data['school_details'] = $this->General_model->getTableData('school_details');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/show_school');
        $this->load->view('admin/footer');
    }

    public function update_school_details($id) {
        $data['page_name'] = 'Edit School Page';
        $data['school_details'] = $this->General_model->getEditData('school_details', $id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_school_details');
        $this->load->view('admin/footer');
    }

    public function update_school_action() {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('school_name', 'SchoolName', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['page_name'] = 'Edit School Page';
            $data['school_details'] = $this->General_model->getEditData('school_details', $id);
            $this->load->view('admin/header', $data);
            $this->load->view('admin/update_school_details');
            $this->load->view('admin/footer');
        } else {
            $data['school_name'] = $this->input->post('school_name');
            $data['address'] = $this->input->post('address');
            $data['phone'] = $this->input->post('phone');


            $config['upload_path'] = './logo/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 100;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                exit;
            } else {
                $data2 = array('upload_data' => $this->upload->data());
                $data['logo'] = $data2['upload_data']['file_name'];
            }

            $is_update = $this->General_model->updateTableData('school_details', 'id', $id, $data);

            if ($is_update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">School Updated Successfully</div>');
                redirect(base_url('admin/show-school'));
            }
        }
    }

    public function add_pages() {
        $data['page_name'] = 'Add Page';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_pages');
        $this->load->view('admin/footer');
    }

    public function page_list() {
        $data['page_name'] = 'Page List';
        $data['pages'] = $this->General_model->getallPageData('pages');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/page_list');
        $this->load->view('admin/footer');
    }

    public function add_pages_action() {

        $this->form_validation->set_rules('page_name', 'Page', 'required|callback_page_check');

        if ($this->form_validation->run() == FALSE) {
            $data['page_name'] = 'Add Page';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/add_pages');
            $this->load->view('admin/footer');
        } else {
            $data['page_name'] = $this->input->post('page_name');
            $data['uri_segment'] = strtolower(str_replace(' ', '-', $this->input->post('page_name')));
            $data['has_sub_page'] = $this->input->post('has_sub_page');
            $is_insert = $this->General_model->insert('pages', $data);

            if ($is_insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">School Added Successfully</div>');
                redirect(base_url('admin/add-pages'));
            }
        }
    }

    public function page_check($str) {
        $converted_page_name = strtolower(str_replace(' ', '-', $str));
        $countData = $this->General_model->check_exists($converted_page_name);
        if ($countData > 0) {
            $this->form_validation->set_message('page_check', 'The %s Name already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function add_sub_pages() {
        $data['page_name'] = 'Add Sub Page';
        $data['pages'] = $this->General_model->getPageData('pages');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_sub_pages');
        $this->load->view('admin/footer');
    }

    public function add_sub_page_action() {
        $this->form_validation->set_rules('main_page', 'Main Page', 'required');
        $this->form_validation->set_rules('sub_page_name', 'Page', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['page_name'] = 'Add Sub Page';
            $data['pages'] = $this->General_model->getPageData('pages');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/add_sub_pages');
            $this->load->view('admin/footer');
        } else {

            $data['sub_page_name'] = $this->input->post('sub_page_name');
            $data['uri_segment'] = strtolower(str_replace(' ', '-', $this->input->post('sub_page_name')));
            $data['page_id'] = $this->input->post('main_page');

            $is_exists = $this->General_model->checkSubpageData($data['uri_segment'], $data['page_id']);

            if (!$is_exists > 0) {
                $is_insert = $this->General_model->insert('subpages', $data);

                if ($is_insert) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">School Added Successfully</div>');
                    redirect(base_url('admin/add-sub-pages'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">This Page Name Already Exists</div>');
                redirect(base_url('admin/add-sub-pages'));
            }
        }
    }

    public function add_page_contents() {
        $data['page_name'] = 'Add Page Contents';
        $data['pages'] = $this->General_model->getallPageData('pages');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_page_contents');
        $this->load->view('admin/footer');
    }

    public function update_single_page_content($id, $page_segment) {
        $data['page_name'] = 'Add Single Page Contents';
        $data['id'] = base64_decode($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/' . $page_segment . '_form');
        $this->load->view('admin/footer');
    }

    public function add_page_content_action() {
        $data['page_id'] = $this->input->post('id');
        $data['contents'] = $this->input->post('content');

        /* File upload code */

        $config['upload_path'] = './profile_photo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $config['max_width'] = 160;
        $config['max_height'] = 200;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $profile_picture = $this->upload->data();
            $data['head_sir_photo'] = $profile_picture['file_name'];
        }


        $is_exists = $this->General_model->checkSingle_Page_ContentsData($data['page_id']);
        if ($is_exists > 0) {
            $success = $this->General_model->updateTableData('single_page_contents', 'page_id', $data['page_id'], $data);
            if ($success) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Updateded Contents</div>');
                redirect(base_url('admin/add-page-contents'));
            }
        } else {
            $success = $this->General_model->insert('single_page_contents', $data);
            if ($success) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Added Contents</div>');
                redirect(base_url('admin/add-page-contents'));
            }
        }
    }
    public function add_about_page_content_action() {
        $data['page_id'] = $this->input->post('id');
        $data['contents'] = $this->input->post('content');
        $data['mission_and_vision'] = $this->input->post('mission_and_vision');
        $data['at_a_glance'] = $this->input->post('at_a_glance');

        /* File upload code start */

        $config['upload_path'] = './profile_photo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 5000024;
        $config['max_width'] = 960;
        $config['max_height'] = 400;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $profile_picture = $this->upload->data();
            $data['school_photo'] = $profile_picture['file_name'];
        }

        /* File Upload Code End */
        
        $is_exists = $this->General_model->checkSingle_Page_ContentsData($data['page_id']);
        if ($is_exists > 0) {
            $success = $this->General_model->updateTableData('single_page_contents', 'page_id', $data['page_id'], $data);
            if ($success) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Updateded Contents</div>');
                redirect(base_url('admin/add-page-contents'));
            }
        } else {
            $success = $this->General_model->insert('single_page_contents', $data);
            if ($success) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Added Contents</div>');
                redirect(base_url('admin/add-page-contents'));
            }
        }
    }

    public function view_multiple_pages($id) {
        $data['page_name'] = 'View Subpages';
        $data['page_id'] = $id;
        $data['subpages'] = $this->General_model->getSubPageData('subpages', $id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/view_multiple_pages');
        $this->load->view('admin/footer');
    }

    public function update_subpage_content($id) {
        $data['page_name'] = 'Add SubPage Contents';
        $data['id'] = $id;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_subpage_content');
        $this->load->view('admin/footer');
    }

    public function add_subpage_content_action() {
        $data['page_id'] = $this->input->post('id');
        $data['contents'] = $this->input->post('content');
        $success = $this->General_model->insert('subpage_contents', $data);
        if ($success) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">Added Contents</div>');
            redirect(base_url('admin/update-subpage-content/' . $data['id']));
        }
    }

    public function make_multipages($id, $val) {

        $get_value = $this->General_model->getEditData('pages', $id)->has_sub_page;
        if ($get_value == 0) {
            $data['has_sub_page'] = 1;
            $update = $this->General_model->updateTableData('pages', 'id', $id, $data);
            if ($update) {
                echo 'Updated';
            }
        } else {
            $data['has_sub_page'] = 0;
            $update = $this->General_model->updateTableData('pages', 'id', $id, $data);
            if ($update) {
                echo 'Updated';
            }
        }
    }

}
