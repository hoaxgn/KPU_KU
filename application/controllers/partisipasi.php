<?php

class partisipasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Partisipasi';
        $this->load->view('templates/headertw');
        $this->load->view('templates/sidebar2');
        $this->load->view('partisipasi/index');
        $this->load->view('templates/footertw');
    }
}
