<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfficialsRecordsModel extends CI_Model{
	public function getMembers(){
		$query = $this->db->get('officials_records');
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
		   'MEMBERSHIP'=>$this->input->post('text_membership'),
		   'RESPONSIBILITY'=>$this->input->post('text_resp'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'MARITAL_STATUS'=>$this->input->post('text_marital'),
		   'RESIDENTIAL_ADDRESS'=>$this->input->post('text_address'),

		);
		$this->db->insert('officials_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	} 
	public function getMembersById($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('officials_records');
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
		   'CHURCH_LEADERSHIP_POST'=>$this->input->post('text_post'),
		   'PHONE_NUMBER'=>$this->input->post('text_phone'),
		   'EMAIL_ADDRESS'=>$this->input->post('text_email'),
		   'MARITAL_STATUS'=>$this->input->post('text_marital'),
		   'RESIDENTIAL_ADDRESS'=>$this->input->post('text_address'),

		);
		$this->db->where('ID', $id);
		$this->db->update('officials_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('officials_records');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}