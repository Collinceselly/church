<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChildrenModel extends CI_Model{
	public function getMembers(){
		$query = $this->db->get('children_members_records');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$field = array(
		   'C_FIRST_NAME'=>$this->input->post('text_fname'),
		   'C_OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'BAPTIZED'=>$this->input->post('text_baptized'),
		   'FATHER_FNAME'=>$this->input->post('text_ffname'),
		   'FATHER_LNAME'=>$this->input->post('text_flname'),
		   'MOTHER_FNAME'=>$this->input->post('text_mfname'),
		   'MOTHER_LNAME'=>$this->input->post('text_mlname'),
		   'FATHER_IDNO'=>$this->input->post('text_fid'),
		   'MOTHER_IDNO'=>$this->input->post('text_mid'),

		);
		$this->db->insert('children_members_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	} 

	public function getMembersById($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('children_members_records');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	/*public function getJoin($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('children_members_records');
		$query = $this->db->get('adults_members_records');
		if ($query->num_rows() > 0) {
			return $query->row();
		}else{
			return false;
		}
	}*/
	public function update(){
		$id = $this->input->post('text_hidden');
		$field = array(
		   'C_FIRST_NAME'=>$this->input->post('text_fname'),
		   'C_OTHER_NAMES'=>$this->input->post('text_oname'),
		   'GENDER'=>$this->input->post('text_gender'),
		   'BAPTIZED'=>$this->input->post('text_baptized'),
		   'FATHER_FNAME'=>$this->input->post('text_ffname'),
		   'FATHER_LNAME'=>$this->input->post('text_flname'),
		   'MOTHER_FNAME'=>$this->input->post('text_mfname'),
		   'MOTHER_LNAME'=>$this->input->post('text_mlname'),
		   'FATHER_IDNO'=>$this->input->post('text_fid'),
		   'MOTHER_IDNO'=>$this->input->post('text_mid'),

		);
		$this->db->where('ID', $id);
		$this->db->update('children_members_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	/*public function updatejoin(){
			$id = $this->input->post('text_hidden');
			$field = array(

			)
	}*/

	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('children_members_records');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}