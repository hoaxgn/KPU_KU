<?php

class legislatif extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Legislatif tahun 2014';
        $this->load->view('templates/headertw');
        $this->load->view('templates/sidebar2');
        $this->load->view('legislatif/index');
        $this->load->view('templates/footertw');
    }
}
