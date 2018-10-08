<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Child_search_model extends CI_Model{

	function search($user){
		$this->db->select('*');
		$this->db->from('children_members_records');
		$this->db->join('adults_members_records','adults_members_records.ID_CARD_NUMBER = children_members_records.FATHER_IDNO','full');
		$this->db->where('adults_members_records.ID_CARD_NUMBER', $user);

	$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}
	}
}