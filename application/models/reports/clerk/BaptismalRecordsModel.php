<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaptismalRecordsModel extends CI_Model{
	public function getMembers(){
		$query = $this->db->get('baptismal_class_records');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$field = array(
		   'FIRST_NAME'=>$this->input->post('text_fname'),
		   'OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'AGE'=>$this->input->post('text_age'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'RESIDENCE'=>$this->input->post('text_residence'),

		);
		$this->db->insert('baptismal_class_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	} 
	public function getMembersById($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('baptismal_class_records');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function update(){
		$id = $this->input->post('text_hidden');
		$field = array(
		   'FIRST_NAME'=>$this->input->post('text_fname'),
		   'OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'AGE'=>$this->input->post('text_age'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'RESIDENCE'=>$this->input->post('text_residence'),

		);
		$this->db->where('ID', $id);
		$this->db->update('baptismal_class_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('baptismal_class_records');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function approveMembers($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('baptismal_class_records');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}

	}
	public function approved(){
		$field = array(
		   'FIRST_NAME'=>$this->input->post('text_fname'),
		   'OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'AGE'=>$this->input->post('text_age'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'RESIDENCE'=>$this->input->post('text_residence'),
		   'BAPTISM_DATE'=>$this->input->post('text_date'),

		);
		$this->db->insert('baptismal_approved_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}
	public function viewApproved(){
		$query = $this->db->get('baptismal_approved_records');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}