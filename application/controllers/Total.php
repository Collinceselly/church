<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		//$this->load->helper('url');
		$this->load->view('total');

	}
}