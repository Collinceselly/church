<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualTithesReport extends CI_Model{

	public function searchMember($user){
		$this->db->select('*');
		$this->db->from('adults_members_records');
		$this->db->join('givings_records','adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
		$this->db->like('adults_members_records.ID_CARD_NUMBER', $user);
		$this->db->or_like('adults_members_records.FIRST_NAME', $user);
		$this->db->or_like('adults_members_records.GENDER', $user);
		$this->db->or_like('adults_members_records.PHONE_NUMBER', $user);

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}

	}

	public function viewTithes($user){
		$this->db->select('givings_records.SABBATH_DATE', 'adults_members_records.FIRST_NAME');
		$this->db->from('givings_records');
		$this->db->join('adults_members_records','adults_members_records.ID = givings_records.GIVINGS_FK');
		$this->db->where('givings_records.SABBATH_DATE', $user);

		//$this->db->where("givings_records.SABBATH_DATE_DATE " . "'" . $data['user'] . "'" . " AND adults_members_records.FIRST_NAME" . "'" . $data['user1'] . "'");

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}

	}
	public function viewMonthly($user){
		$this->db->select('*');
		$this->db->from('givings_records');
		$this->db->join('adults_members_records','adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
		$this->db->where('MONTH(SABBATH_DATE)', $user);

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}

	}

	public function firstQuater($data){
		$this->db->select('*');
		$this->db->from('givings_records');
		//$this->db->join('adults_members_records','adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
		//$this->db->where('SABBATH_DATE >=','2018-01-01');
		//$this->db->where('SABBATH_DATE <=','2018-03-31');
		$this->db->where("SABBATH_DATE BETWEEN " . "'" . $data['2018-01-01'] . "'" . " AND " . "'" . $data['2018-03-31'] . "'");
		//$this->db->limit(1);

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}
	}

	public function viewYear($user) {
		$this->db->select('*');
		$this->db->from('givings_records');
		$this->db->join('adults_members_records','adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
		$this->db->where('YEAR(SABBATH_DATE)', $user);

		$query = $this->db->get();
		
		if ($query->num_rows()>0) {
			return $query->result();

		} else {
			return false;
		}

	}
}