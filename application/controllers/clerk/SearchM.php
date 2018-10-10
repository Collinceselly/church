<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class SearchM extends CI_Controller{

	public function __construct(){
	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
<<<<<<< HEAD
		$this->load->model('clerk/SearchMModel');
=======
		$this->load->model('clerk/search_m_model');
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
		$this->load->library('session');

}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('search_m_view');
	}

	public function search(){
			$user = $this->input->post('text_value');
		if($user != ""){

			$result = $this->search_m_model->multipleSearch($user);

			if($result){

				$data['result'] = $result;

				$this->load->view('search_m_view',$data);
			}
			else{
				
				$data['result_display'] = "No record found";
		
<<<<<<< HEAD
				print('Records ennterd does not exist');
=======
				print('The ID Number Entered or First Name is was no found');
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96

				
			}

		}
		else{
<<<<<<< HEAD
			print('ID Number or name Field is required to search');
=======
			print('ID Number Field is required to search');
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
		}

	}
}
