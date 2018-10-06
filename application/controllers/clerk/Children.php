<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Children extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('clerk/childrenModel', 'm');
	}

	function index(){
		$data['members'] = $this->m->getMembers();
		$this->load->view('layout/header');
		//print_r($data);
		$this->load->view('children/children_view',$data);
		$this->load->view('layout/footer');
	}
	public function add(){
		$this->load->view('layout/header');
		$this->load->view('children/add_child');
		$this->load->view('layout/footer');
	}
	public function submit(){
		$result = $this->m->submit(); 
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to add records');

		}
		redirect(base_url('clerk/children_controller/index'));
	}
	public function edit($id){
		$data['members'] = $this->m->getMembersById($id);
		$this->load->view('layout/header');
		$this->load->view('children/edit_child', $data);
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
		redirect(base_url('clerk/children_controller/index'));
	}
	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record Deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to Delete records');

		}

		redirect(base_url('clerk/children_controller/index'));
	}
	
}