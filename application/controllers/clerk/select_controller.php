<?php 

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Select_controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('select_model');

	}
	public function index(){
		//$data['show_table'] = $this->view_table();
		$this->load->helper('form');
		$this->load->view('select_view');


	}

	/*public function view_table(){
		$result = $this->select_model->show_all_data();
		if ($result != false){
			return $result;
		}
		else{
			return 'Database is empty !';
		}
	}*/
	public function select_by_id(){
		
		$id = $this->input->post('ID_CARD_NUMBER');
		if($id != ""){
			$result = $this->select_model->show_data_by_id($id);
			if($result != false){
				$data['result_display'] = $result;
			}
			else{
				$data['result_display'] = "No record Found";
				print('The ID Number Entered is not found');
			}
		}
		else{
			$data = array(
				'id_error_message' => "Id Field is required");
			print('Id field is required to search');
		}
		//$data['show_table'] = $this->select_view();
		//$this->load->view('select_view', $data);
	}

}
?>