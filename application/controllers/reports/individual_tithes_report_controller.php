<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Individual_tithes_report_controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('reports/individual_tithes_report_model');

		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('login_model');
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('layout/header');
		//$this->load->view('reports/members_view',$data);
		$this->load->view('layout/footer');
		$this->load->view('reports/search_member_view');
	}
	public function search(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/search_member_view');
	}
	public function searchMember(){
		$user = $this->input->post('text_value');
		if($user != ""){

			$result = $this->individual_tithes_report_model->searchMember($user);
			//$this->load->view('finance/searchMember_view');
			//print_r($result);

			if($result){
				//$this->session->set_flashdata('success_msg', 'Record updated successfully');

				$data['result'] = $result;

				$this->load->view('reports/search_member_view',$data);
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

	public function selectType(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/select_type_view');

	}
	public function selectType1(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/select_type1_view');

	}
	public function selectDate(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/individual_tithes_view');
	}

	public function viewTithes(){
			$user = $this->input->post('date');
			//$user1 = $this->input->post('text_fname');
			$data = array(
				'user' => $user,
				//'user1' => $user1
			);
		if($user == ""){

			$data['error_message']="Both Fields are Required";
				}
				else{
			$result = $this->individual_tithes_report_model->viewTithes($user);
}
			if($result){

				$data['result'] = $result;

				$this->load->view('reports/individual_tithes_view',$data);
				
			}
			else{
				
				$data['result_display'] = "No record found";
				print('The date entered has no records');

				
			}
}
		
		//else{

			//print('ID Number Field is required to search');
		//}

	//}

	public function selectMonth(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/individual_monthly_tithes_contribution_view');
	}

	public function viewMonthly(){
			$user = $this->input->post('date');
		if($user != ""){

			$result = $this->individual_tithes_report_model->viewMonthly($user);

			if($result){

				$data['result'] = $result;

				$this->load->view('reports/individual_monthly_tithes_contribution_view',$data);
				
			}
			else{
				
				$data['result_display'] = "No record found";
				print('No records found for that given month');

				
			}

		}
		else{

			prin('Please enter date to do the search');
		}

	}

	public function selectQuater(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/quater_view');
	}

	public function firstQuater12(){
		$data['results'] = $this->individual_tithes_report_model->firstQuater($data);
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/first_quater_view',$data);

	}
	public function firstQuater1(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/first_quater_view');
	}

	public function firstQuater(){
		$user1 = $this->input->post('2018-01-01');
		$user2 = $this->input->post('2018-03-31');
		$data=array(
			'user1'=>$user1,
			'user2'=>$user2
		);
		if($user1 == "" || $user2 == ""){
			$data['error_message']="Both date Fields are Required";

		}
		else{
			//$data['result'] = $result;
			//$this->load->view('search_by_date_range_view',$data);
			$result = $this->individual_tithes_report_model->firstQuater($data);
		
		if ($result) {
			$data['result'] = $result;
			$this->load->view('reports/quater_view',$data);
		}
		else{
			$data['result_display'] = "No record found";
			print('No records found for that range of date');
		}
	}
	
	}

	public function selectYear(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/individual_annual_tithes_contribution_view');

	}

	public function viewYear(){
			$user = $this->input->post('date');
		if($user != ""){

			$result = $this->individual_tithes_report_model->viewYear($user);

			if($result){

				$data['result'] = $result;

				$this->load->view('reports/individual_annual_tithes_contribution_view',$data);
				
			}
			else{
				
				$data['result_display'] = "No record found";
				print('No records found for that given year');

				
			}

		}
		else{

			prin('Please enter year to do the search');
		}

	}
}