<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL);

class ChurchClerk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$this->load->view('church_clerk_view');
	}

	public function RegisterMembers()
	{


		$this->load->model('church_clerk_model');
		$this->form_validation->set_rules('ID_CARD_NUMBER', 'IDENTITY CARD NUMBER', 'trim|required');
		$this->form_validation->set_rules('FIRST_NAME', 'FIRST NAME', 'trim|required');
		$this->form_validation->set_rules('OTHER_NAMES', 'OTHER NAMES', 'trim|required');
		$this->form_validation->set_rules('GENDER', 'GENDER', 'trim|required|xss_clean');
		$this->form_validation->set_rules('CHURCH_LEADERSHIP_POST', 'CHURCH LEADERSHIP POST', 'trim|required');
		$this->form_validation->set_rules('PHONE_NUMBER', 'PHONE NUMBER', 'trim|required');
		$this->form_validation->set_rules('E-MAIL_ADDRESS', 'EMAIL ADDRESS', 'trim|required');
		$this->form_validation->set_rules('OCCUPATION', 'OCCUPATION', 'trim|required');
		$this->form_validation->set_rules('RESIDENTIAL_ADDRESS', 'RESIDENTIAL ADDRESS', 'trim|required');

		$this->form_validation->set_error_delimiters('<div class="error-msg">','</div>');

		if ($this->form_validation->run()==FALSE)
		{
			
			$this->load->view('church_clerk_view');
		}
		else
		{

			$IdNumber  == $this->security->xss_clean($this->input->post('ID_CARD_NUMBER'));
			$FirstName  == $this->security->xss_clean($this->input->post('FIRST_NAME'));
			$OtherNames  == $this->security->xss_clean($this->input->post('OTHER_NAMES'));
			$Gender  == $this->security->xss_clean($this->input->post('GENDER'));
			$Occupation  == $this->security->xss_clean($this->input->post('OCCUPATION'));
			$ChurchLeadershipPost  == $this->security->xss_clean($this->input->post('CHURCH_LEADERSHIP_POST'));
			$PhoneNumber  == $this->security->xss_clean($this->input->post('PHONE_NUMBER'));
			$EmailAddress  == $this->security->xss_clean($this->input->post('E-MAIL_ADDRESS'));
			$ResidentialAddress  == $this->security->xss_clean($this->input->post('RESIDENTIAL_ADDRESS'));

			$insertData = array('ID_CARD_NUMBER'=>$IdNumber,
								'FIRST_NAME'=>$Firstname,
								'OTHER_NAMES'=>$OtherNames,
								'GENDER'=>$Gender,
								'OCCUPATION'=>$Occupation,
								'CHURCH_LEADERSHIP_POST'=>$ChurchLeadershipPost,
								'PHONE_NUMBER'=>$PhoneNumber,
								'E-MAIL_ADDRESS'=>$EmailAddress,
								'RESIDENTIAL_ADDRESS'=>$ResidentialAddress,
							);


			$checkDuplicate = $this->church_clerk_model->checkDuplicate($ID_CARD_NUMBER);

			if($checkDuplicate == 0)
			{

				$insertUser = $this->church_clerk_model->insertUser($insertData);

			if($insertUser)
			{
				redirect('user/thankyou');
			}
			else
			{
				$data['errorMsg'] = 'Unable to save user. Please try again';
				$this->load->view('church_clerk_view',$data);
			}
			}
			else
			{
				$data['errorMsg'] = 'User ID already exists';
				$this->load->view('church_clerk_view',$data);
			}

		}
	}
}