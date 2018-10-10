<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model{

	function search($user){

		$this->db->select('*');
		$this->db->from('adults_members_records');
<<<<<<< HEAD
		$this->db->like('ID_CARD_NUMBER', $user);
		$this->db->or_like('FIRST_NAME',$user);
		$this->db->or_like('OTHER_NAMES',$user);
		//$this->db->limit(1);


		$query = $this->db->get();
		
		if($query->num_rows()>0){
=======
		$this->db->where('ID_CARD_NUMBER', $user);
		$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()==1){
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
			return $query->result();

		}else{
			return false;
		}
	}
}