<?php
class Live_search_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("adults_members_records");
  if($query != '')
  {
   $this->db->like('ID_CARD_NUMBER', $query);
   $this->db->or_like('FIRST_NAME', $query);
   $this->db->or_like('OTHER_NAMES', $query);
   $this->db->or_like('GENDER', $query);
   $this->db->or_like('OCCUPATION', $query);
   $this->db->or_like('CHURCH_LEADERSHIP_POST', $query);
   $this->db->or_like('PHONE_NUMBER', $query);
   $this->db->or_like('EMAIL_ADDRESS', $query);
   $this->db->or_like('RESIDENTIAL_ADDRESS', $query);

  //$this->db->order_by('CustomerID', 'DESC');
  return $this->db->get();
 }
}
?>