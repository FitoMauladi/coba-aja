<?php
defined('BASEPATH') or exit('No direct script access allowed');

class controler_biodata extends CI_Controller
{


    public function index()
    {
        $this->load->view('view_biodata');
    }
}