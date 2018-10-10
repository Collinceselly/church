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
<<<<<<< HEAD
$this->db->insert('officials_records', $data);
=======
$this->db->insert('officials', $data);
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
}
}
?>