<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchByDateRangeModel extends CI_Model{

	function search($data){

		$this->db->select('*');
		$this->db->from('visitors_records');
		$this->db->where("ATTENDANCE_DATE BETWEEN " . "'" . $data['user1'] . "'" . " AND " . "'" . $data['user2'] . "'");
		//$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}
	}
}