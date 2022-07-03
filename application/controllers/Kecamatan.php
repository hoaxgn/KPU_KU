<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    var $api = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['title'] = 'Kecamatan Menu';
        $data['data'] = $this->session->userdata(('data'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kecamatan');
        $this->load->view('templates/footer');
    }
    // public function manage()
    // {
    //     $data['title'] = 'Data Admin';
    //     $data['data'] = $this->session->userdata(('data'));
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('admin/admin-manage');
    //     $this->load->view('templates/footer');
    // }
    public function ambildata()
    {
        // $api = $this->curl->simple_get($this->api);
        // $decode = json_decode($this->$api);
        // $data = $decode['data'];
        // echo json_encode($data);
        $data = $this->input->post();
        // $decode = json_decode($data);
        echo json_encode($data);
    }
    public function tambahData()
    {
        $kecamatan = $this->input->post('kecamatan');
        if ($kecamatan == '') {
            $result['pesan'] = "Nama Kecamatan Tidak boleh Kosong!!";
        } else {
            $result['pesan'] = "";
        }
        echo json_encode($result);
    }
}
