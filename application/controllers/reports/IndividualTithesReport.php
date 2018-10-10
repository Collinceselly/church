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
         // $this->load->view('layout/header');

         // $this->load->view('layout/footer');
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
        $this->load->view('reports/select_type1_view');
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

    public function viewMonthly()
    {
        $date_month1 = $this->input->post('date_monthly');
        $user = $this->input->post('user');
        $date_month2 = $this->input->post('date_monthly2');
        $report_type = strtoupper($this->input->post('report_type'));
        $member = array();
        if (isset($_POST['user'])) {
            $result = $this->report_model->viewMonthly($user, $date_month1, $date_month2, $report_type);
            
            foreach ($result as $key => $value) {
                $member[$value->SABBATH_DATE] = $value->$report_type;
            }

			if ($result) {
                foreach ($result as $key => $value) {
                    $member[$value->SABBATH_DATE] = $value->$report_type;
                }

                $data['result'] = $result;
                $data['memberstat'] = $member;
                $data['contribution_type'] = $report_type;
                $this->load->view('reports/combined_contribution', $data);
            } else {
                $data['result'] = array();
                $data['result_display'] = "No record found";
                $data['contribution_type'] = "";
                $data['memberstat'] = array();
                $this->session->set_flashdata('report_missing', 'No Record Found For Such User');
                $this->load->view('reports/combined_contribution', $data);
            }
        } else {
            $data['result'] = array();
            $data['memberstat'] = array();
            $this->load->view('reports/combined_contribution', $data);
        }
    }

    public function viewYearly()
    {

        $date_year1 = $this->input->post('date_yearly');
        $user = $this->input->post('user');
        $date_year2 = $this->input->post('date_yearly2');
        $report_type = strtoupper($this->input->post('report_type'));
        if (isset($_POST['user'])) {
            $result = $this->report_model->viewYearly($user, $date_year1, $date_year2, $report_type);
            $member = array();
            if ($result) {
                foreach ($result as $key => $value) {
                    $member[$value->SABBATH_DATE] = $value->$report_type;
                }
                $data['result'] = $result;
                $data['memberstat'] = $member;
                $data['contribution_type'] = $report_type;
                $this->load->view('reports/combined_contribution', $data);
            } else {
                $data['result'] = array();
                $data['result_display'] = "No record found";
                $data['contribution_type'] = "";
                $data['memberstat'] = array();
                $this->session->set_flashdata('report_missing', 'No Record Found For Such User');
                $this->load->view('reports/combined_contribution', $data);
            }
        } else {
            $data['result'] = array();
            $data['memberstat'] = array();
            $this->load->view('reports/combined_contribution', $data);
        }
    }

    public function viewTithes()
    {
        $date = $this->input->post('date_sabbath');
        $user = $this->input->post('user');
        $date2 = $this->input->post('date_sabbath2');
        $report_type = strtoupper($this->input->post('report_type'));
        $member = array();
        if ($this->input->post('quarter_selection')) {
            $currentQuarter = IndividualTithesReport::getCurrentQuater($this->input->post('quarter_selection'));
            $date = $currentQuarter['date1'];
            $date2 = $currentQuarter['date2'];
        }
        if (isset($_POST['user'])) {
            $result = $this->report_model->viewMemberTithes($user, $date, $date2);
            if ($result) {
                foreach ($result as $key => $value) {
                    $member[$value->SABBATH_DATE] = $value->$report_type;
                }
                $data['result'] = $result;
                $data['memberstat'] = $member;
                $data['contribution_type'] = $report_type;
                $this->load->view('reports/combined_contribution', $data);
            } else {
                $data['result'] = array();
                $data['result_display'] = "No record found";
                $data['contribution_type'] = "";
                $this->session->set_flashdata('report_missing', 'No Record Found For Such User');
                $this->load->view('reports/combined_contribution', $data);
            }
        } else {
            $data['result'] = array();
            $data['memberstat'] = array();
            $this->load->view('reports/combined_contribution', $data);
        }
    }

    public function viewContributions()
    {
        
        $date = $this->input->post('date_sabbath');
        $user = $this->input->post('user');
        $date2 = $this->input->post('date_sabbath2');
        $member = array();
        if (isset($_POST['user'])) {
            $member = array();
            $date = $this->input->post('date_sabbath');
            $user = $this->input->post('user');
            $date2 = $this->input->post('date_sabbath2');
            if ($this->input->post('quarter_selection')) {
                $currentQuarter = IndividualTithesReport::getCurrentQuater($this->input->post('quarter_selection'));
                $date = $currentQuarter['date1'];
                $date2 = $currentQuarter['date2'];
                $data['quarter'] = $currentQuarter['quarter'];
            }
        }
        if (isset($user) && !empty($user)) {
            $result = $this->report_model->viewContributionsDate($user, $date, $date2);
            if ($result) {
                $member['TITHES'] = 0;
                $member['COMBINED_OFFERING'] = 0;
                $member['CAMP_OFFERING'] = 0;
                $member['CHURCH_BUILDING'] = 0;
                $member['CONFERENCE'] = 0;
                $member['LOCAL_CHURCH'] = 0;
                $member['STATION_DEVELOPMENT'] = 0;
                foreach ($result as $key => $value) {
                    $member['TITHES'] += (!empty($value['TITHES'])) ? $value['TITHES'] : 0 ;
                    $member['COMBINED_OFFERING'] += (!empty($value['COMBINED_OFFERING'])) ? $value['COMBINED_OFFERING'] : 0 ;
                    $member['CAMP_OFFERING'] += (!empty($value['CAMP_OFFERING'])) ? $value['CAMP_OFFERING'] : 0 ;
                    $member['CHURCH_BUILDING'] += (!empty($value['CHURCH_BUILDING'])) ? $value['CHURCH_BUILDING'] : 0 ;
                    $member['CONFERENCE'] += (!empty($value['CONFERENCE'])) ? $value['CONFERENCE'] : 0 ;
                    $member['LOCAL_CHURCH'] += (!empty($value['LOCAL_CHURCH'])) ? $value['LOCAL_CHURCH'] : 0 ;
                    $member['STATION_DEVELOPMENT'] += (!empty($value['STATION_DEVELOPMENT'])) ? $value['STATION_DEVELOPMENT'] : 0 ;
                }
               
				$data['result'] = $result;
				$data['memberstat'] = $member;
				$data['contribution_type'] = "";

				$this->load->view('reports/all_contributions', $data);
			} else {
				$data['result'] = array();
				$data['result_display'] = "No record found";
				$data['contribution_type'] = "";
                 $data['quarter'] = "";
				$this->session->set_flashdata('report_missing', 'No Record Found For Such User');
				$this->load->view('reports/all_contributions', $data);
			}
        } else {
            $data['result'] = array();
            $data['memberstat'] = array();
            $data['quarter'] = "";
            $this->load->view('reports/all_contributions', $data);
        }
    }

    public function viewContributionsMonthly()
    {
        $date = $this->input->post('date_monthly');
        $user = $this->input->post('user');
        $date2 = $this->input->post('date_monthly2');
        $member = array();
        if (isset($_POST['user'])) {
            $result = $this->report_model->viewContributionsMonthly($user, $date, $date2);
            if ($result) {
                $member['TITHES'] = 0;
                $member['COMBINED_OFFERING'] = 0;
                $member['CAMP_OFFERING'] = 0;
                $member['CHURCH_BUILDING'] = 0;
                $member['CONFERENCE'] = 0;
                $member['LOCAL_CHURCH'] = 0;
                $member['STATION_DEVELOPMENT'] = 0;
                foreach ($result as $key => $value) {
                    $member['TITHES'] += (!empty($value['TITHES'])) ? $value['TITHES'] : 0 ;
                    $member['COMBINED_OFFERING'] += (!empty($value['COMBINED_OFFERING'])) ? $value['COMBINED_OFFERING'] : 0 ;
                    $member['CAMP_OFFERING'] += (!empty($value['CAMP_OFFERING'])) ? $value['CAMP_OFFERING'] : 0 ;
                    $member['CHURCH_BUILDING'] += (!empty($value['CHURCH_BUILDING'])) ? $value['CHURCH_BUILDING'] : 0 ;
                    $member['CONFERENCE'] += (!empty($value['CONFERENCE'])) ? $value['CONFERENCE'] : 0 ;
                    $member['LOCAL_CHURCH'] += (!empty($value['LOCAL_CHURCH'])) ? $value['LOCAL_CHURCH'] : 0 ;
                    $member['STATION_DEVELOPMENT'] += (!empty($value['STATION_DEVELOPMENT'])) ? $value['STATION_DEVELOPMENT'] : 0 ;
                }
                $data['result'] = $result;
                $data['memberstat'] = $member;
                $data['contribution_type'] = "";
                $this->load->view('reports/all_contributions', $data);
            } else {
				$data['result'] = array();
				$data['result_display'] = "No record found";
				$data['contribution_type'] = "";
				$this->session->set_flashdata('report_missing', 'No Record Found For Such User');
				$this->load->view('reports/all_contributions', $data);
			}
        } else {
            $data['result'] = array();
            $data['memberstat'] = array();
            $this->load->view('reports/all_contributions', $data);
        }
    }

    public function viewContributionsYearly()
    {
        
        $date = $this->input->post('date_yearly');
        $user = $this->input->post('user');
        $date2 = $this->input->post('date_yearly2');
        $member = array();
        if (isset($_POST['user'])) {
            $result = $this->report_model->viewContributionsYearly($user, $date, $date2);
            if ($result) {
                $member['TITHES'] = 0;
                $member['COMBINED_OFFERING'] = 0;
                $member['CAMP_OFFERING'] = 0;
                $member['CHURCH_BUILDING'] = 0;
                $member['CONFERENCE'] = 0;
                $member['LOCAL_CHURCH'] = 0;
                $member['STATION_DEVELOPMENT'] = 0;
                foreach ($result as $key => $value) {
                    $member['TITHES'] += (!empty($value['TITHES'])) ? $value['TITHES'] : 0 ;
                    $member['COMBINED_OFFERING'] += (!empty($value['COMBINED_OFFERING'])) ? $value['COMBINED_OFFERING'] : 0 ;
                    $member['CAMP_OFFERING'] += (!empty($value['CAMP_OFFERING'])) ? $value['CAMP_OFFERING'] : 0 ;
                    $member['CHURCH_BUILDING'] += (!empty($value['CHURCH_BUILDING'])) ? $value['CHURCH_BUILDING'] : 0 ;
                    $member['CONFERENCE'] += (!empty($value['CONFERENCE'])) ? $value['CONFERENCE'] : 0 ;
                    $member['LOCAL_CHURCH'] += (!empty($value['LOCAL_CHURCH'])) ? $value['LOCAL_CHURCH'] : 0 ;
                    $member['STATION_DEVELOPMENT'] += (!empty($value['STATION_DEVELOPMENT'])) ? $value['STATION_DEVELOPMENT'] : 0 ;
                }
               
                $data['result'] = $result;
                $data['memberstat'] = $member;
                $data['contribution_type'] = "";
                $this->load->view('reports/all_contributions', $data);
                
			} else {
				$data['result'] = array();
				$data['result_display'] = "No record found";
				$data['contribution_type'] = "";
				$this->session->set_flashdata('report_missing', 'No Record Found For Such User');
				$this->load->view('reports/all_contributions', $data);
            }
        } else {
            $data['result'] = array();
            $data['memberstat'] = array();
            $this->load->view('reports/all_contributions', $data);
        }
    }


    public function selectMonth()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('reports/individual_monthly_tithes_contribution_view');
    }
    
    // public function viewMonthly()
    // {
    //     $user = $this->input->post('date');
    //     if ($user != "") {
    //         $result = $this->report_model->viewMonthly($user);
    //         if ($result) {
    //             $data['result'] = $result;
    //             $this->load->view('reports/individual_monthly_tithes_contribution_view', $data);
    //         } else {
    //             $data['result_display'] = "No record found";
    //             print('No records found for that given month');
    //         }
    //     } else {
    //           print('Please enter date to do the search');
    //     }
    // }

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

    public static function getCurrentQuater($quarter_selection = '')
    {
        if (date("m") === '01' || date("m") === '02' || date("m") === '03' || date("m") === '04' || $quarter_selection == "first_quarter") {
            return array('date1' => date("Y") .'-01-01', 'date2' => date("Y"). '-04-30', "quarter" => 1);
        }
        if (date("m") === '05' || date("m") === '06' || date("m") === '07' || date("m") === '08' || $quarter_selection == "second_quarter") {
            return array('date1' => date("Y") .'-05-01', 'date2' => date("Y"). '-08-31', "quarter" => 2);
        }
        if (date("m") === '09' || date("m") === '10' || date("m") === '11' || date("m") === '12' || $quarter_selection == "third_quarter") {
            return array('date1' => date("Y") .'-09-01', 'date2' => date("Y"). '-12-31', "quarter" => 3);
        }
    }

    public function getChurchContribution()
    {
        $currentQuarter = IndividualTithesReport::getCurrentQuater();
        $results = array();
        if (isset($_POST['date_sabbath']) && isset($_POST['date_sabbath2'])) {
            if ($this->input->post('by_date') == 'by_date') {
                $results = $this->report_model->churchTithes($this->input->post('date_sabbath'), $this->input->post('date_sabbath2'));

            }
        }
        if (isset($_POST['date_monthly']) && isset($_POST['date_monthly2'])) {
            if ($this->input->post('by_month') == 'by_month') {
                $results = $this->report_model->churchContributionsMonthly($this->input->post('date_monthly'), $this->input->post('date_monthly2'));
                
            }
        }
        if (isset($_POST['date_yearly']) && isset($_POST['date_yearly2'])) {
            if ($this->input->post('by_year') == 'by_year'){
                $results = $this->report_model->churchContributionsYearly($this->input->post('date_yearly'), $this->input->post('date_yearly2'));
                
            }
        }
        if ($this->input->post('reporting') == 1) {
        } else {

            if ($this->input->post('quarter_selection')) {
                $currentQuarter = IndividualTithesReport::getCurrentQuater($this->input->post('quarter_selection'));
            }

            $results = $this->report_model->churchTithes($currentQuarter['date1'], $currentQuarter['date2']);
        }

        if ($results) {
            $member['TITHES'] = 0;
            $member['COMBINED_OFFERING'] = 0;
            $member['CAMP_OFFERING'] = 0;
            $member['CHURCH_BUILDING'] = 0;
            $member['CONFERENCE'] = 0;
            $member['LOCAL_CHURCH'] = 0;
            $member['STATION_DEVELOPMENT'] = 0;

            foreach ($results as $result => $value) {
                $member['TITHES'] += (!empty($value->TITHES)) ? $value->TITHES : 0 ;
                $member['COMBINED_OFFERING'] += (!empty($value->COMBINED_OFFERING)) ? $value->COMBINED_OFFERING : 0 ;
                $member['CAMP_OFFERING'] += (!empty($value->CAMP_OFFERING)) ? $value->CAMP_OFFERING : 0 ;
                $member['CHURCH_BUILDING'] += (!empty($value->CHURCH_BUILDING)) ? $value->CHURCH_BUILDING : 0 ;
                $member['CONFERENCE'] += (!empty($value->CONFERENCE)) ? $value->CONFERENCE : 0 ;
                $member['LOCAL_CHURCH'] += (!empty($value->LOCAL_CHURCH)) ? $value->LOCAL_CHURCH : 0 ;
                $member['STATION_DEVELOPMENT'] += (!empty($value->STATION_DEVELOPMENT)) ? $value->STATION_DEVELOPMENT : 0 ;
            }

            $data['result'] = $results;
            $data['memberstat'] = $member;
            $data['contribution_type'] = "";
            $data['quarter'] = $currentQuarter['quarter'];
            $this->load->view('reportS/church_contribution', $data);
        } else {
            $data['result'] = array();
            $data['result_display'] = "No record found";
            $data['contribution_type'] = "";
            $data['quarter'] = "";
            $this->session->set_flashdata('report_missing', 'No Record Found');
            $this->load->view('reports/church_contribution', $data);
        }
    }
}
