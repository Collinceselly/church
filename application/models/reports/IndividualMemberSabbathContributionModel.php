<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualMemberSabbathContributionModel extends CI_Model{
	public function getMembers(){
		$query = $this->db->get('adults_members_records');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function viewContribution($user){
		$this->db->select('*');
		$this->db->from('givings_records');
		$this->db->join('adults_members_records','adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
		$this->db->where('givings_records.SABBATH_DATE', $user);

		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}

	}
	}