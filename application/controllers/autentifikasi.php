<?php
class Autentifikasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/aute_header');

        $this->load->view('autentifikasi/login');

        $this->load->view('templates/aute_footer');
    }
}