<?php

class petapolitik extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Peta Politik tahun 2014';
        $this->load->view('templates/sidebar2');
        $this->load->view('petapolitik/index');
    }
}
