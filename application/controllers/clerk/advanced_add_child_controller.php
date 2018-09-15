<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Advanced_add_child_controller extends CI_Controller{

	public function __construct(){
	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('clerk/advanced_add_child_model');
		$this->load->library('session');

}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('advanced_add_child_view');
	}

	public function search(){
		$user = $this->input->post('idno');
		if($user != ""){

			$result = $this->advanced_add_child_model->search($user);
			//$this->load->view('search_view');
			//print_r($result);

			if($result){
				//$this->session->set_flashdata('success_msg', 'Record updated successfully');

				$data['result'] = $result;

				$this->load->view('advanced_add_child_view',$data);
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
	public function advancedAdd($id){
		$data['members'] = $this->advanced_add_child_model->advancesAdd($id);
		$this->load->view('layout/header');
		$this->load->view('children/advanced_add_child_view', $data);
		$this->load->view('layout/footer');

	}

	public function advancedSubmit(){
		$result = $this->advanced_add_child_model->advancedSubmit(); 
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to add records');

		}
		//redirect(base_url('baptismal_records_controller/class'));
	}
}
