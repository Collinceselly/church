<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Treasury extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->model('finance/givings_model', 'm');

		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('login_model');
		$this->load->library('session');
	}
	function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('modules/treasury_view');
	}
	
}