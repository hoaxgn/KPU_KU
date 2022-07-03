<?php

class hasilpemilu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daerah Pemilihan';
        $this->load->view('templates/headertw');
        $this->load->view('templates/sidebar2');
        $this->load->view('hasilpemilu/index');
        $this->load->view('templates/footertw');
    }
}
