<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	
	function login($user,$pass){
		$this->db->select('ID_CARD_NUMBER,PASSWORD,ROLE,FIRST_NAME');
		$this->db->from('officials');
		$this->db->where('ID_CARD_NUMBER',$user);
		$this->db->where('PASSWORD',$pass);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();

		}else{
			return false;
		}
	}
}