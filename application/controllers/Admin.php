<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    var $api = '';
    public function __construct()
    {
        parent::__construct();
        $this->api = "http://localhost:2000/admin";
        $this->load->helper('form');
        $this->load->helper('url');
        $curl = curl_init();
    }
    public function index()
    {
        if ($this->session->userdata('status') == false) {
            redirect('auth');
        }
        $data['title'] = 'Beranda';
        $data['data'] = $this->session->userdata(('data'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
    public function manage()
    {
        $data['title'] = 'Data Admin';
        $data['data'] = $this->session->userdata(('data'));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/admin-manage');
        $this->load->view('templates/footer');
    }
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
        $nama_partai = $this->input->post('nama');
        $visi_partai = $this->input->post('visi');
        $misi_partai = $this->input->post('misi');
        $nama_ketua = $this->input->post('nama_ketua');
        $profil_partai = $this->input->post('profil');

        if ($nama_partai == '') {
            $result['pesan'] = "Nama partai tidak boleh kosong!!";
        } elseif ($visi_partai == '') {
            $result['pesan'] = "Visi partai tidak boleh kosong!!";
        } elseif ($misi_partai == '') {
            $result['pesan'] = "Misi partai tidak boleh kosong!!";
        } elseif ($nama_ketua == '') {
            $result['pesan'] = "Ketua partai tidak boleh kosong!!";
        } elseif ($profil_partai == '') {
            $result['pesan'] = "Profil partai tidak boleh kosong!!";
        } else {
            $result['pesan'] = "";
        }
        echo json_encode($result);
    }
}
