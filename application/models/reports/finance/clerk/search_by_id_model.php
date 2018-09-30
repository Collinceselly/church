<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_by_id_model extends CI_Model{

	function search($user){

		$this->db->select('*');
		$this->db->from('visitors_records');
		$this->db->where('ID_CARD_NUMBER', $user);
		$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()==1){
			return $query->result();

		}else{
			return false;
		}
	}
}