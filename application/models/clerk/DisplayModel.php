<?php
class DisplayModel extends CI_Model {

 function __construct(){
  parent::__construct();
 }

 function displayMembers(){
  $this->db->select("*");
  $this->db->from('adults_members_records');
  $query = $this->db->get();
  return $query->result();
 }

 function show_member_id(){
 	$this->db->select('*');
	$this->db->from('adults_members_records');
	$this->db->where('ID', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;

 }
 function update_member_id1($id, $data){
 	$this->db->where('ID', $id);
	$this->db->update('adults_members_records', $data);
 }
 }
?>

<!--ID,ID_CARD_NUMBER,FIRST_NAME,OTHER_NAMES,GENDER,OCCUPATION,CHURCH_LEADERSHIP_POST,PHONE_NUMBER,E-MAIL_ADDRESS,RESIDENTIAL_ADDRESS-->