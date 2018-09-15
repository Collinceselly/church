<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Search_controller extends CI_Controller{

	public function __construct(){
	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('clerk/search_model');
		$this->load->library('session');

}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('search_view');
	}

	public function search(){
		$user = $this->input->post('idno');
		if($user != ""){

			$result = $this->search_model->search($user);
			//$this->load->view('search_view');
			//print_r($result);

			if($result){
				//$this->session->set_flashdata('success_msg', 'Record updated successfully');

				$data['result'] = $result;

				$this->load->view('search_view',$data);
				//print_r($result);
			}
			else{
				
				$data['result_display'] = "No record found";
				//$this->session->set_flashdata('error_msg', 'Fail to update records');
				//redirect(base_url('search_controller/index'));
				print('The ID Number Entered is was no found');

				
			}


			//redirect(base_url('search_controller/search'));

		}
		else{

			//$data = array('id_error_message'=>"ID Field is required");
			print('ID Number Field is required to search');
		}

	}
}
