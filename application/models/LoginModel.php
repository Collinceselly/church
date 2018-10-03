<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function login($user, $pass)
    {
        $this->db->select('ID_CARD_NUMBER,PASSWORD,ROLE,FIRST_NAME');
        $this->db->from('officials');
        $this->db->where('ID_CARD_NUMBER', $user);
        $this->db->where('PASSWORD', $pass);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if ($query->num_rows()==1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function loginUser($user, $pass)
    {
        $this->db->select();
        $this->db->from('adults_members_records');
        $this->db->where('EMAIL_ADDRESS', $user);
        $this->db->where('password', $pass);
        $this->db->limit(1);

        $query = $this->db->get();


        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            $this->db->select();
            $this->db->from('adults_members_records');
            $this->db->where('PHONE_NUMBER', $user);
            $this->db->where('password', $pass);
            $this->db->limit(1);

            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                $this->db->select();
                $this->db->from('adults_members_records');
                $this->db->where('ID_CARD_NUMBER', $user);
                $this->db->where('password', $pass);
                $this->db->limit(1);

                $query = $this->db->get();

                if ($query->num_rows() == 1) {
                    return $query->result();
                } else {
                    return false;
                }
            }
        }
    }

    public function loginCheck($user)
    {
        $this->db->select();
        $this->db->from('adults_members_records');
        $this->db->where('EMAIL_ADDRESS', $user);
        
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
             $this->db->select();
             $this->db->from('adults_members_records');
             $this->db->where('PHONE_NUMBER', $user);
            
             $this->db->limit(1);
             
             $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                $this->db->select();
                $this->db->from('adults_members_records');
                $this->db->where('ID_CARD_NUMBER', $user);
               
                $this->db->limit(1);
  
                $query = $this->db->get();
  
                if ($query->num_rows() == 1) {
                    return $query->result();
                } else {
                    return false;
                }
            }
        }
    }
}
