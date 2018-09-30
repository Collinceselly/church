<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Givings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('finance/givingsModel', 'm');

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('finance/givings_view');
    }

    public function getMembers()
    {
        $data['members'] = $this->m->getMembers();
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('finance/fetch_members_view', $data);
    }

    public function search()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('finance/searchMember_view');
    }

    public function searchMember()
    {
        $user = $this->input->post('text_value');
        if ($user != "") {
            $result = $this->m->searchMember($user);
            //$this->load->view('finance/searchMember_view');
            //print_r($result);

            if ($result) {
                //$this->session->set_flashdata('success_msg', 'Record updated successfully');
                $data['result'] = $result;
                $this->load->view('finance/searchmember_view', $data);
                //print_r($result);
            } else {
                $data['result_display'] = "No record found";
                print('The ID Number Entered or First Name is was no found');
            }
            //redirect(base_url('search_controller/search'));
        } else {
            //$data = array('id_error_message'=>"ID Field is required");
            print('ID Number Field is required to search');
        }
    }
    public function addGivings($id)
    {
        $data['members'] = $this->m->addGivings($id);
        $this->load->view('layout/header');
        $this->load->view('finance/add_givings_view', $data);
        $this->load->view('layout/footer');
    }

    public function submitRecord()
    {
        $members_contributing = $this->input->post('text_fk');
        $result = $this->m->submitRecord();
        if ($result) {
            $this->session->set_flashdata('giving_msg', 'Record added successfully');
        } else {
            $this->session->set_flashdata('giving_msg_error', 'Fail to add records');
        }

        $this->addGivings($members_contributing);
    }

    public function checkRecord()
    {
    	$text_user = $this->input->post('text_user');
    	$text_date = $this->input->post('text_date');
    	$result = $this->m->checkRecord($text_user['text_user'], $text_date['text_date']);
    	if ($result) {
    		echo json_encode(['status' => 1]);
    	} else {
    		echo json_encode(['status' => 0]);
    	}
    }
}
