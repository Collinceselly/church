<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisitorsModel extends CI_Model{
	public function getMembers(){
		$query = $this->db->get('visitors_records');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$field = array(
		   'ID_CARD_NUMBER'=>$this->input->post('text_idno'),
		   'FIRST_NAME'=>$this->input->post('text_fname'),
		   'OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'OCCUPATION'=>$this->input->post('text_occupation'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'CHURCH_ATTENDING'=>$this->input->post('text_church'),
		   'ATTENDANCE_DATE'=>$this->input->post('text_date'),

		);
		$this->db->insert('visitors_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	} 
	public function getMembersById($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('visitors_records');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function update(){
		$id = $this->input->post('text_hidden');
		$field = array(
		   'ID_CARD_NUMBER'=>$this->input->post('text_idno'),
		   'FIRST_NAME'=>$this->input->post('text_fname'),
		   'OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'OCCUPATION'=>$this->input->post('text_occupation'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'CHURCH_ATTENDING'=>$this->input->post('text_church'),
		   'ATTENDANCE_DATE'=>$this->input->post('text_date'),

		);
		$this->db->where('ID', $id);
		$this->db->update('visitors_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('visitors_records');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}