<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home_page_controller extends CI_Controller{
	function __construct(){
		parent:: __construct();
		//$this->load->model('trial_model', 'm');
	}
	public function index(){
		$this->load->view('layout/header');
		$this->load->helper('url');
		$this->load->view('home_page_view');
	}
}