<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateController extends CI_Controller{
	function __construct(){
		parent:: __construct();
		//$this->load->model('clerk/adultsModel', 'm');
	}

	function index(){
		//$data['members'] = $this->m->getMembers();
		//$this->load->view('layout/header');
		//print_r($data);
		$this->load->view('church_home_view');
		//$this->load->view('layout/footer');
	}
}

?>