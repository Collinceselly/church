<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ChurchClerkModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}

	function checkDuplicate($ID_CARD_NUMBER)
	{
		$this->db->select('ID_CARD_NUMBER');
		$this->db->from('adults_members_records');
		$this->db->like('ID_CARD_NUMBER', $ID_CARD_NUMBER);
		return $this->db->count_all_results();
	}

	function insertUser($data)

	{
		if($this->db->insert('users', $data))
		{
			return $this->db->insert_id();
		}
	
	else
	{
		return false;
	}
}
}