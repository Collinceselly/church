<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class SearchByDateRange extends CI_Controller{

	public function __construct(){
	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('clerk/search_by_date_range_model');
		$this->load->library('session');

}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
		$this->load->view('visitors/search_by_date_range_view');
	}

	public function search(){
		$user1 = $this->input->post('date_from');
		$user2 = $this->input->post('date_to');
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
			$result = $this->search_by_date_range_model->search($data);
		
		if ($result) {
			$data['result'] = $result;
			$this->load->view('visitors/search_by_date_range_view',$data);
		}
		else{
			$data['result_display'] = "No record found";
			print('No records found for that range of date');
		}
	}
	
	}
}
