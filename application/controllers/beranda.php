<?php

class beranda extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/headertw');
        $this->load->view('beranda/index');
        $this->load->view('templates/footertw');
    }
}
