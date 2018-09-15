<?php 

if(!defined('BASWPATH'))exit('No direct script access allowed');
class Select_model extends CI_Model{

	public function show_all_data(){
		$this->db->select('*');
		$this->from('adults_members_records');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function show_data_by_id($id){
		$condition = "ID_CARD_NUMBER =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('adults_members_records');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}

}

?>