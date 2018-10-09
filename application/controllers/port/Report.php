<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('reports/individualTithesReportModel', 'report_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = 'Portal| Report';

		$this->load->view('portal/index', $data);
	}

	public function viewAllContributions()
	{
		$results = array();
		if (isset($_POST['date_sabbath']) && isset($_POST['date_sabbath2'])) {
			if ($this->input->post('by_date') == 'by_date') {
				foreach ($_SESSION['user_details'] as $user_detail) {
					$results = $this->report_model->MemberTithes($user_detail->ID, $this->input->post('date_sabbath'), $this->input->post('date_sabbath2'));
				}
			}
		}
		if (isset($_POST['date_monthly']) && isset($_POST['date_monthly2'])) {
			if ($this->input->post('by_month') == 'by_month') {
				foreach ($_SESSION['user_details'] as $user_detail) {
					$results = $this->report_model->ContributionsMonthly($user_detail->ID, $this->input->post('date_monthly'), $this->input->post('date_monthly2'));
				}
			}
		}
		if (isset($_POST['date_yearly']) && isset($_POST['date_yearly2'])) {
			if ($this->input->post('by_year') == 'by_year'){
				foreach($_SESSION['user_details'] as $user_detail) {
					$results = $this->report_model->ContributionsYearly($user_detail->ID, $this->input->post('date_yearly'), $this->input->post('date_yearly2'));
				}
			}
		}
		if ($this->input->post('reporting') == 1) {
		} else {

			if ($this->input->post('quarter_selection')) {
				$currentQuarter = Report::getCurrentQuater($this->input->post('quarter_selection'));
			} else {
				$currentQuarter = Report::getCurrentQuater();
			}
			foreach ($_SESSION['user_details'] as $user_detail) {
				$results = $this->report_model->MemberTithes($user_detail->ID, $currentQuarter['date1'], $currentQuarter['date2']);
			}
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
			$this->load->view('portal/all_contributions', $data);
		} else {
			$data['result'] = array();
			$data['result_display'] = "No record found";
			$data['contribution_type'] = "";
			$data['quarter'] = "";
			$this->session->set_flashdata('report_missing', 'No Record Found');
			$this->load->view('portal/all_contributions', $data);
		}
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

	public function getMyContributions()
	{
    $results = array();
    $member = array();
    $report_type = strtoupper($this->input->post('report_type'));

		if (isset($_POST['date_sabbath']) && isset($_POST['date_sabbath2'])) {
			if ($this->input->post('by_date') == 'by_date') {
				foreach ($_SESSION['user_details'] as $user_detail) {
					$results = $this->report_model->memberTithes($user_detail->ID, $this->input->post('date_sabbath'), $this->input->post('date_sabbath2'));
				}
			}
		}
		if (isset($_POST['date_monthly']) && isset($_POST['date_monthly2'])) {
			if ($this->input->post('by_month') == 'by_month') {
				foreach ($_SESSION['user_details'] as $user_detail) {
					$results = $this->report_model->membersMonthly($user_detail->ID, $this->input->post('date_monthly'), $this->input->post('date_monthly2'),$report_type );
				}
			}
		}
		if (isset($_POST['date_yearly']) && isset($_POST['date_yearly2'])) {
			if ($this->input->post('by_year') == 'by_year'){
				foreach($_SESSION['user_details'] as $user_detail) {
					$results = $this->report_model->memberYearly($user_detail->ID, $this->input->post('date_yearly'), $this->input->post('date_yearly2'), $report_type);
				}
			}
		}
		if (isset($_POST['quarter_selection'])) {
				$currentQuarter = Report::getCurrentQuater($this->input->post('quarter_selection'));

				foreach ($_SESSION['user_details'] as $user_detail) {
            $results = $this->report_model->memberTithes($user_detail->ID, $currentQuarter['date1'], $currentQuarter['date2']);
          }
          if (empty($results)) {
          	$this->session->set_flashdata('report_missing', 'No Record Found For that Quarter');
          }
        }

		if ($results) {
			foreach ($results as $key => $value) {
				$member[$value->SABBATH_DATE] = $value->$report_type;
			}

			$data['result'] = $results;
			$data['memberstat'] = $member;
			$data['contribution_type'] = $report_type;
			$this->load->view('portal/individual_reports', $data);

		} else {
			$data['result'] = array();
			$data['result_display'] = "No record found";
			$data['contribution_type'] = "";
			$data['memberstat'] = array();
//			$this->session->set_flashdata('report_missing', 'No Record Found For Such User');
			$this->load->view('portal/individual_reports', $data);
		}
	}
}
