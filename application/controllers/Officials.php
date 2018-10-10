<?php

class Officials extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('OfficialsModel');

}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('idno', 'Id Card Number', 'is_unique[officials_records.ID_CARD_NUMBER]|required|min_length[7]|max_length[8]');


//Validating Email Field
$this->form_validation->set_rules('fname', 'First Name', 'required');

//Validating Email Field
$this->form_validation->set_rules('oname', 'Other Names', 'required');

//Validating Email Field
$this->form_validation->set_rules('gender', 'Gender', 'required');

//Validating Email Field
$this->form_validation->set_rules('role', 'Role', 'required');

//Validating Email Field
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('password', 'Password', 'required');

if ($this->form_validation->run() == FALSE) {
$this->load->view('officials_view');
} 

else {
//Setting values for tabel columns
$data = array(
'ID_CARD_NUMBER' => $this->input->post('idno'),
'FIRST_NAME' => $this->input->post('fname'),
'OTHER_NAMES' => $this->input->post('oname'),
'GENDER' => $this->input->post('gender'),
'RESPONSIBILITY' => $this->input->post('responsibility'),
'PHONE_NUMBER' => $this->input->post('mobile'),
'EMAIL_ADDRESS' => $this->input->post('email'),
//'PASSW' => sha1($this->input->post('password')),
'MARITAL_STATUS' => $this->input->post('marital'),
'OCCUPATION' => $this->input->post('occupation'),
'RESIDENTIAL_ADDRESS' =>$this->post('residence'),
'ROLE' => $this->input->post('role'),
'PHONE_NUMBER' => $this->input->post('mobile'),
'EMAIL_ADDRESS' => $this->input->post('email'),
'PASSWORD' => sha1($this->input->post('password'))
);

//Transfering data to Model
$this->officials_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('officials_view', $data);

/*$checkDuplicate = $this->insert_model->checkDuplicate('idno');

if($checkDuplicate == 0){

//Transfering data to Model
	
$register = $this->insert_model->form_insert('ID_CARD_NUMBER');
//$this->insert_model->form_insert('$data')
if($register){
	$this->insert_model->form_insert('$data');
	redirect('user/thank you');
}

else{
	$data['errorMsg'] = 'unable to save user, please try again later';
	$this->load->view('insert_view', $data);
}
}
else{

	$data['errorMsg'] = 'User Already exist';
	$this->load->view('insert_view', $data);*/
}
}
}

?>