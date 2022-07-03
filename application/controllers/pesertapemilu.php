<?php

class pesertapemilu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Peserta Pemilu';
        $this->load->view('templates/headertw');
        $this->load->view('templates/sidebar2');
        $this->load->view('pesertapemilu/index');
        $this->load->view('templates/footertw');
    }

    public function profilparpol()
    {
        $data['title'] = 'Profil Pemilu';
        $this->load->view('templates/headertw');
        $this->load->view('pesertapemilu/profilparpol');
        $this->load->view('templates/footertw');
    }
}
