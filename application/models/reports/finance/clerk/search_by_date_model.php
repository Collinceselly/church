<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_by_date_model extends CI_Model{

	function search($user){

		$this->db->select('*');
		$this->db->from('visitors_records');
		$this->db->where('ATTENDANCE_DATE', $user);
		//$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}
	}
}