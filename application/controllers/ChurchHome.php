<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChurchHome extends CI_Controller {

	public function index()
	{
		// $this->load->view('layout/header');
		$this->load->helper('url');
		$this->load->view('church_home_view');

	}
}