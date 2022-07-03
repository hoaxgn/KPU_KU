<?php

class daerahpemilihan extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/sidebar2');
        $this->load->view('daerahpemilihan/index');
    }
}
