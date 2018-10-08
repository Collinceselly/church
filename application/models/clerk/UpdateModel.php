<?php
class UpdateModel extends CI_Model{

	function __construct(){
		parent::__construct();
	}
// Function To Fetch All Students Record
function show_members(){
	$this->db->select('*');
	$this->db->from('adults_members_records');
	$query = $this->db->get();
	$query_result = $query->result();
	return $query_result;
}
// Function To Fetch Selected Student Record
function show_member_id($data){
	$this->db->select('*');
	$this->db->from('adults_members_records');
	$this->db->where('ID_CARD_NUMBER', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
}
// Update Query For Selected Student
function update_member_id1($id,$data){
	$this->db->where('ID_CARD_NUMBER', $id);
	$this->db->update('adults_members_records', $data);
}
}
?>