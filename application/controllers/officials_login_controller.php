<?php 
session_start();

Class Officials_login_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		//$this->load->helper('security');
		$this->load->model('officials_login_model');

	}
	public function index(){
		$this->load->view('officials_login_view');
	}
	 public function user_login(){
		$this->load->library('form_validation');

	 	$this->form_validation->set_rules('idno', 'Id Card Number', 'required');
	 	$this->form_validation->set_rules('password', 'Password', 'required');
	 	$this->form_validation->set_rules('role', 'Role', 'required');

	 	if($this->form_validation->run() == FALSE){
	 		if(isset($this->session->Userdata['logged_in'])){
	 			$this->load->view('admin_page');
	 		}
	 		else{
	 			$data = array(
	 			'ID_CARD_NUMBER' => $this->input->post('idno'),
	 			'PASSWORD' => $this->input->post('password'),
	 			'ROLE' => $this->input->post('role'),
	 			);
	 			$result = $this->officials_login_model->login($data);
	 			if ($result == TRUE) {

	 				$idno = $this->input->post('idno');
	 				$result = $this->officials_login_model->read_user_information($idno);
	 				if($result != false){
	 					$session_data = array(
	 						'idno' => $result[0]->ID_CARD_NUMBER,
	 						'role' => $result[0]->ROLE,
	 					);
	 					$this->session->set_userdata('logged_in', $session_data);
	 					$this->load->view('admin_page');
	 				}

	 			}
	 			else{
	 				$data = array(
	 					'error_message' => 'Invalid ID Number or Password'
	 				);
	 				$this->load->view('officials_login_view', $data);
	 			}
	 		}
	 	}

	 	function logout(){
	 		$sess_array = array(
	 			'idno' => ''
	 		);
	 		$this->session->unset_userdata('logged_in', $sess_array);
	 		$data['message_display'] = 'Successfully Logout';
	 		$this->load->view('officials_login_view', $data);
	 	}
	 }
}
?>