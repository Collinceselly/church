<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GivingsModel extends CI_Model{
	public function getMembers(){
		$query = $this->db->get('adults_members_records');
		$this->db->order_by('FIRST_NAME', 'ASC');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}
	public function addGivings($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('adults_members_records');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function searchMember($user){
		$this->db->select('*');
		$this->db->from('adults_members_records');
		$this->db->like('FIRST_NAME', $user);
		$this->db->or_like('OTHER_NAMES', $user);
		$this->db->or_like('ID_CARD_NUMBER', $user);

		$this->db->order_by('FIRST_NAME', 'ASC');
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();

		}else{
			return false;
		}
	}
	public function submitRecord(){
		$field = array(
		   'SABBATH_DATE'=>$this->input->post('text_date'),
		   'TITHES'=>$this->input->post('text_tithe'),
		   'COMBINED_OFFERING'=>$this->input->post('text_combined'),
		   'CAMP_OFFERING'=>$this->input->post('text_camp'),
		   'CHURCH_BUILDING'=>$this->input->post('text_building'),
		   'CONFERENCE'=>$this->input->post('text_conference'),
		   'LOCAL_CHURCH'=>$this->input->post('text_local'),
		   'STATION_DEVELOPMENT'=>$this->input->post('text_station'),
		   'TOTAL_AMOUNT'=>$this->input->post('text_total'),
		   'GIVINGS_FK'=>$this->input->post('text_fk'),
		   //$this->db->where('SABBATH_DATE'== '$text_date' AND 'GIVINGS_FK'== '$text_fk');

		);
  
		$this->db->insert('givings_records', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
  }

  public function checkRecord($text_user, $text_date)
  {
  	$this->db->where('GIVINGS_FK =', $text_user);
  	$this->db->where('SABBATH_DATE =', $text_date);
  	//echo $this->db->get_compiled_select();exit();
  	$query = $this->db->get('givings_records');
  	if ($query->num_rows() >= 1) {
  		return true;
  	} else {
  		return false;
  	}
  }

/*public function check_record_exist($sabbath_date,$fr_key){
	$this->db->where('SABBATH_DATE',$sabbath_date AND 'GIVINGS_FK',$fr_key);
	$this->db->from('givings_records');
	$query = $this->db->get();

	if($query->num_rows()>0){
		return $query->result();
	}
	else{
		return $query->result();
	}
}
	
	*/
}
	//}

		