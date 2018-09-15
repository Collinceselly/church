<?php

Class Officials_login_model extends CI_Model{

	public function login($data){
		$condition = "ID_CARD_NUMBER =" . "'" . $data['ID_CARD_NUMBER'] . "' AND " . "PASSWORD =" . "'" . $data['PASSWORD']. "' AND " . "ROLE =" . "'" . $data['ROLE'] . "'";
		$this->db->select('*');
		$this->db->from('officials');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}

	public function read_user_information($idno){
		$condition = "ID_CARD_NUMBER =" . "'" . $ID_CARD_NUMBER . "'";
		$this->db->select('*');
		$this->db->from('officials');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->results();
		}
		else{
			return false;
		}
	}
}

?>