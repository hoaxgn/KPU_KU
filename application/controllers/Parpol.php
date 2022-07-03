<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parpol extends CI_Controller
{
    var $api = '';
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Partai Politik';
        $data['data'] = $this->session->userdata(('data'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('partai/index');
        $this->load->view('templates/footer');
    }
}
