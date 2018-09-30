<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class BaptismalRecords extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('baptismal_records_model', 'm');

		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('baptismal_records_model');
		$this->load->library('session');
	}
	function index(){
		$this->load->view('baptismal/baptismal_record_view');
	}
	public function class(){
		$data['members'] = $this->m->getMembers();
		$this->load->view('layout/header');
		//print_r($data);
		$this->load->view('baptismal/baptismal_class_view',$data);
		$this->load->view('layout/footer');
		//$this->load->view('baptismal/baptismal_class_view');
	}
	public function add(){
		$this->load->view('layout/header');
		$this->load->view('baptismal/add_baptismal_class_members');
		$this->load->view('layout/footer');
	}
	public function submit(){
		$result = $this->m->submit(); 
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to add records');

		}
		redirect(base_url('baptismal_records_controller/class'));
	}
	public function edit($id){
		$data['members'] = $this->m->getMembersById($id);
		$this->load->view('layout/header');
		$this->load->view('baptismal/edit_class_view', $data);
		$this->load->view('layout/footer');
	}
	public function editJoin($id){
		$data['members'] = $this->m->getJoin($id);
		$this->load->view('layout/header');
		$this->load->view('children/edit_child', $data);
		$this->load->view('layout/footer');

	}
	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to update records');

		}
		redirect(base_url('baptismal_records_controller/class'));
	}
	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record Deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to Delete records');

		}

		redirect(base_url('baptismal_records_controller/class'));
	}
	public function approve($id){
		$data['members'] = $this->m->approveMembers($id);
		$this->load->view('layout/header');
		$this->load->view('baptismal/approved_members_view', $data);
		$this->load->view('layout/footer');
	}
	public function approved(){
		$result = $this->m->approved(); 
		if($result){
			$this->session->set_flashdata('success_msg', 'Approval successful');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to approve member');

		}
		redirect(base_url('baptismal_records_controller/class'));

	}
	public function viewApproved(){
		$data['members'] = $this->m->viewApproved();
		$this->load->view('layout/header');
		//print_r($data);
		$this->load->view('baptismal/approved_view',$data);
		$this->load->view('layout/footer');
	}
	
}