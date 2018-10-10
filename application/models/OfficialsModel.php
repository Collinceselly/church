<?php
class OfficialsModel extends CI_Model{
function __construct() {
parent::__construct();
}

/*function checkDuplicate($ID_CARD_NUMBER)
	{
		$this->db->select('ID_CARD_NUMBER');
		$this->db->from('adults_members_records');
		$this->db->like('ID_CARD_NUMBER', 'idno');
		return $this->db->count_all_results();
	}*/

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('officials_records', $data);
}
}
?>