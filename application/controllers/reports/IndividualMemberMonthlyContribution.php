<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
class IndividualMemberMonthlyContribution extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('reports/individual_member_monthly_contribution_model');

		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('login_model');
		$this->load->library('session');


		}
		public function index(){
		$data['members'] = $this->individual_member_monthly_contribution_model->getMembers();
		$this->load->view('layout/header');
		$this->load->view('reports/members_view',$data);
		$this->load->view('layout/footer');
	}
	public function selectDate(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/individual_member_monthly_contribution_view');
	}
	public function selectMonth(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('reports/individual_member_monthly_contribution_view');
	}


		public function viewContribution(){
			$user = $this->input->post('date');
		if($user != ""){

			$result = $this->individual_member_monthly_contribution_model->viewContribution($user);

			if($result){

				$data['result'] = $result;

				$this->load->view('reports/individual_member_monthly_contribution_view',$data);
				
			}
			else{
				
				$data['result_display'] = "No record found";
				print('No records found for that given month');

				
			}

		}
		else{

			print('Please enter date to do the search');
		}

	}
}