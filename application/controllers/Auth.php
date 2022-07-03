<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    var $api = "";
    public function __construct()
    {
        parent::__construct();
        $this->api = "http://localhost:2000/sign-in";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('status') == true) {
            redirect('admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/auth_footer');
        } else {
            $this->session();
        }
    }
    public function session()
    {
        $data = $this->input->post();
        $this->session->set_userdata($data);
        echo json_encode($data);
    }
    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}
