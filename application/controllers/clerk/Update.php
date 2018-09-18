<?php

class Update extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('update_model');
}
public function index(){

	//$this->load->view('update_view');
	//}

	//function show_members(){
	$query = $this->update_model->show_members();
	$data['members'] = null;
	if($query){
		$data['members'] = $query;
	}
	$this->load->view('trial', $data);
	}


function show_member_id($idno) {
//$id = $this->uri->segment(3);//get id from the url
	$data= array();
	$data['members'] = $this->update_model->show_members();
	$data['single_member'] = $this->update_model->show_member_id($id);
	$this->load->view('trial',$data);
}

function update_member_id1() {
	$id= $this->input->post('id');
	$data = array(
		'ID_CARD_NUMBER' => $this->input->post('idno'),
		'FIRST_NAME' => $this->input->post('fname'),
		'OTHER_NAMES' => $this->input->post('oname'),
		'GENDER' => $this->input->post('gender'),
		'OCCUPATION' => $this->input->post('occupation'),
		'CHURCH_LEADERSHIP_POST' => $this->input->post('post'),
		'PHONE_NUMBER' => $this->input->post('mobile'),
		'EMAIL_ADDRESS' => $this->input->post('email'),
		'RESIDENTIAL_ADDRESS' => $this->input->post('address'),
);
	$this->update_model->update_members_id1($id,$data);
	$this->show_member_id();
}

}
?>
