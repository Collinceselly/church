<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CollinceModel extends CI_Model {

    // Get all user list
    function getUsersList(){
        $this->db->select('*');
        $this->db->from('adults_members_records');
        //$this->db->order_by('name', 'asc');
        //$this->db->limit(10,0);
        $q = $this->db->get();
        $result = $q->result_array();
        return $result;
    }

    // Get user by id
    function getUserById($id){
        $this->db->select('*');
        $this->db->from('adults_members_records');
        $this->db->where('ID', $id);
        $q = $this->db->get();
        $result = $q->result_array();
        return $result;
    }

    // Update record by id
    function updateUser($id,$postData){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'ID_CARD_NUMBER'=>$this->input->post('txt_idno'),
            'FIRST_NAME'=>$this->input->post('txt_fname'),
            'OTHER_NAMES'=>$this->input->post('txt_oname'),
            'GENDER'=>$this->input->post('txt_gender'),
            'OCCUPATION'=>$this->input->post('txt_occupation'),
            'CHURCH_LEADERSHIP_POST'=>$this->input->post('txt_post'),
            'PHONE_NUMBER'=>$this->input->post('txt_phone'),
            'EMAIL_ADDRESS'=>$this->input->post('txt_email'),
            'RESIDENTIAL_ADDRESS'=>$this->input->post('txt_address'),

        );

      $this->db->where('ID', $id);
      $this->db->update('adults_members_records', $field);

      if($this->db->affected_rows() > 0){
        return true;
      }
      else{
        return false;
      }


}
}

    
    ?>
