<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function admin_login_action() {
        $this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('user_name');
            $password = md5($this->input->post('password'));
            $no_of_user = $this->Login_model->get_valid_user_count($username, $password);
            if ($no_of_user == 1) {

                $user_details = $this->Login_model->get_user_details($username, $password);

                $newdata = array(
                    'is_admin_login' => 1,
                    'usename' => $user_details->user_name
                );
                $this->session->set_userdata($newdata);
                
                redirect(base_url('admin/dashboard'));
                
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Username / Password Not Matched</div>');
                redirect(base_url('admin-login'));
            }
        }
    }
    
    public function logout(){
        session_destroy();
        redirect(base_url('/'));
    }

}
