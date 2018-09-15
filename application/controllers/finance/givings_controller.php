<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Givings_controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('finance/givings_model', 'm');

		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('login_model');
		$this->load->library('session');
	}
	function index(){
		$this->load->view('finance/givings_view');
	}
	public function getMembers(){
		$data['members'] = $this->m->getMembers();
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('finance/fetch_members_view',$data);
	}
	public function search(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('finance/searchMember_view');
	}
	public function searchMember(){
		$user = $this->input->post('text_value');
		if($user != ""){

			$result = $this->m->searchMember($user);
			//$this->load->view('finance/searchMember_view');
			//print_r($result);

			if($result){
				//$this->session->set_flashdata('success_msg', 'Record updated successfully');

				$data['result'] = $result;

				$this->load->view('finance/searchmember_view',$data);
				//print_r($result);
			}
			else{
				
				$data['result_display'] = "No record found";
				//$this->session->set_flashdata('error_msg', 'Fail to update records');
				//redirect(base_url('search_controller/index'));
				print('The ID Number Entered or First Name is was no found');

				
			}


			//redirect(base_url('search_controller/search'));

		}
		else{

			//$data = array('id_error_message'=>"ID Field is required");
			print('ID Number Field is required to search');
		}
	}
	public function addGivings($id){
		$data['members'] = $this->m->addGivings($id);
		$this->load->view('layout/header');
		$this->load->view('finance/add_givings_view', $data);
		$this->load->view('layout/footer');

	}
	public function submitRecord(){
		//$this->load->model('givings_model')
		
		$result = $this->m->submitRecord();
		//if($this->m->check_record_exist($field['SABBATH_DATE'] AND $field['GININGS_FK'])){
			//print('Records already added for that date');

		//}
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to add records');

		}
		}
		}

	