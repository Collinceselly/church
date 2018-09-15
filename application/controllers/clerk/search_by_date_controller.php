<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Search_by_date_controller extends CI_Controller{

	public function __construct(){
	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('clerk/search_by_date_model');
		$this->load->library('session');

}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('visitors/search_by_date_view');
	}

	public function search(){
		$user = $this->input->post('date');
		if($user != ""){

			$result = $this->search_by_date_model->search($user);

			if($result){

				$data['result'] = $result;

				$this->load->view('visitors/search_by_date_view',$data);
				
			}
			else{
				
				$data['result_display'] = "No record found";
				print('The ID Number Entered is was no found');

				
			}

		}
		else{

			print('ID Number Field is required to search');
		}

	}
}
