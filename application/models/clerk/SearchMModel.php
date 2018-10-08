<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchMModel extends CI_Model{

	/*function search($user){

		$this->db->select('*');
		$this->db->from('adults_members_records');
		$this->db->where('ID_CARD_NUMBER', $user);
		$this->db->where('FIRST_NAME', $user);
		$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()==1){
			return $query->result();

		}else{
			return false;
		}
	}*/

	public function multipleSearch($user){
		$this->db->select('*');
		$this->db->from('children_members_records');
		$this->db->like('C_FIRST_NAME', $user);
		$this->db->or_like('C_OTHER_NAMES', $user);

		$this->db->order_by('C_FIRST_NAME', 'ASC');
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}
	}
}