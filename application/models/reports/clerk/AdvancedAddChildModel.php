<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdvancedAddChildModel extends CI_Model{

	function search($user){

		$this->db->select('*');
		$this->db->from('adults_members_records');
		$this->db->where('ID_CARD_NUMBER', $user);
		$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()==1){
			return $query->result();

		}else{
			return false;
		}
	}
	public function advancesAdd($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('adults_members_records');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}

	}
	public function advancedSubmit(){
		$field = array(
			'ID_CARD_NUMBER'=>$this->input->post('text_idno'),
		   'FIRST_NAME'=>$this->input->post('text_fname'),
		   'OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'RESIDENCE'=>$this->input->post('text_residence'),
		   'C_FIRST_NAME'=>$this->input->post('text_cfname'),
		   'C_OTHER_NAME'=>$this->input->post('text_coname'),
		   'C_GENDER'=>$this->input->post('text_cgender'),
		   'BAPTIZED'=>$this->input->post('text_baptized'),

		);
		$this->db->insert('advanced_children_members_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	}