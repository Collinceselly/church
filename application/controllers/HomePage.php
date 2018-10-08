<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomePage extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
       //$this->load->model('trial_model', 'm');
    }
    public function index()
    {
         // $this->load->view('layout/header');
         $this->load->helper('url');
         $this->load->view('home_page_view');
    }
}
