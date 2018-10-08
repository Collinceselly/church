<?php
class Display extends CI_Controller {

  	function __construct() {
	parent::__construct();
  $this->load->model('display_model');

 }


 public function index(){

  $query = $this->display_model->displayMembers();
  $data['MEMBERS'] = null;
  if($query){
   $data['MEMBERS'] =  $query;
  }

  $this->load->view('display_view', $data);
 }

 function show_member_id($id){
 	$data= array();
	$data['MEMBERS'] = $this->display_model->show_members();
	$data['SINGLE_MEMBER'] = $this->display_model->show_member_id($id);
	$this->load->view('display',$data);
 }

 function update_members_id1(){
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
	$this->display_model->update_members_id1($id,$data);
	$this->show_member_id();
 }
}
?>