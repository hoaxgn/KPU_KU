<?php

class calonterpilih extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Calon Terpilih';
        $this->load->view('templates/headertw');
        $this->load->view('templates/sidebar2');
        $this->load->view('calonterpilih/index');
        $this->load->view('templates/footertw');
    }
}
