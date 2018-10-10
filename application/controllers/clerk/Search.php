<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Search extends CI_Controller{

	public function __construct(){
	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
<<<<<<< HEAD
		$this->load->model('clerk/SearchModel');
=======
		$this->load->model('clerk/search_model');
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
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

<<<<<<< HEAD
			$result = $this->SearchModel->search($user);
=======
			$result = $this->search_model->search($user);
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
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
<<<<<<< HEAD
				print('No records found for the entered details');
=======
				print('The ID Number Entered is was no found');
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96

				
			}


			//redirect(base_url('search_controller/search'));

		}
		else{

			//$data = array('id_error_message'=>"ID Field is required");
<<<<<<< HEAD
			print('The field is required for search');
=======
			print('ID Number Field is required to search');
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
		}

	}
}
