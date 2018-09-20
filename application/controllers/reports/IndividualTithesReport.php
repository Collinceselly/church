<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualTithesReport extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         $this->load->model('reports/individualTithesReportModel', 'report_model');

         $this->load->helper('url');
         $this->load->helper('form');
         $this->load->library('session');
    }

    public function index()
    {
         $this->load->view('layout/header');

         $this->load->view('layout/footer');
         $this->load->view('reports/search_member_view');
    }

    public function search()
    {
         $this->load->view('layout/header');
         $this->load->view('layout/footer');
         $this->load->view('reports/search_member_view');
    }

    public function searchMember()
    {
        $user = $this->input->post('text_value');
        if ($user != "") {
            $result = $this->report_model->searchMember($user);
            if ($result) {
                $data['result'] = $result;
                $this->load->view('reports/search_member_view', $data);
            } else {
                $data['result_display'] = "No record found";
                print('The ID Number Entered or First Name is was no found');
            }
        } else {
            print('ID Number Field is required to search');
        }
    }

    public function selectType()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/select_type_view');
    }

    public function selectType1()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/select_type1_view');
    }

    public function selectDate()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/individual_tithes_view');
    }

    public function viewTithes()
    {
        $date = $this->input->post('date');
        $user = $this->input->post('user');
        $date2 = $this->input->post('date2');
        $result = $this->report_model->viewMemberTithes($user, $date, $date2);
        if ($result) {
            $data['result'] = $result;
            $this->load->view('reports/individual_tithes_view', $data);
        } else {
            $data['result'] = array();
            $data['result_display'] = "No record found";
            $this->session->set_flashdata('report_missing', 'No Record Found For Such User');
            $this->load->view('reports/individual_tithes_view', $data);
        }
    }
    
    public function selectMonth()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/individual_monthly_tithes_contribution_view');
    }
    
    public function viewMonthly()
    {
        $user = $this->input->post('date');
        if ($user != "") {
            $result = $this->report_model->viewMonthly($user);
            if ($result) {
                $data['result'] = $result;
                $this->load->view('reports/individual_monthly_tithes_contribution_view', $data);
            } else {
                $data['result_display'] = "No record found";
                print('No records found for that given month');
            }
        } else {
              print('Please enter date to do the search');
        }
    }

    public function selectQuater()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/quater_view');
    }

    public function firstQuater12()
    {
        $data['results'] = $this->report_model->firstQuater($data);
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/first_quater_view', $data);
    }

    public function firstQuater1()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/first_quater_view');
    }

    public function firstQuater()
    {
        $user1 = $this->input->post('2018-01-01');
        $user2 = $this->input->post('2018-03-31');
        $data=array(
            'user1'=>$user1,
            'user2'=>$user2
        );
        if ($user1 == "" || $user2 == "") {
              $data['error_message']="Both date Fields are Required";
        } else {
              $result = $this->report_model->firstQuater($data);
            if ($result) {
                  $data['result'] = $result;
                  $this->load->view('reports/quater_view', $data);
            } else {
                $data['result_display'] = "No record found";
                print('No records found for that range of date');
            }
        }
    }

    public function selectYear()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/individual_annual_tithes_contribution_view');
    }

    public function viewYear()
    {
        $user = $this->input->post('date');
        if ($user != "") {
              $result = $this->report_model->viewYear($user);
            if ($result) {
                $data['result'] = $result;
                $this->load->view('reports/individual_annual_tithes_contribution_view', $data);
            } else {
                $data['result_display'] = "No record found";
                print('No records found for that given year');
            }
        } else {
            print('Please enter year to do the search');
        }
    }
    //contributing Members
    public function getAllMembers()
    {
        $members = array();
        $result = $this->report_model->getAllMembers();
        foreach ($result as $key => $value) {
            $members[] = $value->name;
        }
        echo json_encode($members, true);
    }
}
