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
        $this->db->where('active', 1);
        $this->db->limit(1);

        $query = $this->db->get();


        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            $this->db->select();
            $this->db->from('adults_members_records');
            $this->db->where('PHONE_NUMBER', $user);
            $this->db->where('password', $pass);
            $this->db->where('active', 1);
            $this->db->limit(1);

            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                $this->db->select();
                $this->db->from('adults_members_records');
                $this->db->where('ID_CARD_NUMBER', $user);
                $this->db->where('password', $pass);
                $this->db->where('active', 1);
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

    public function updateUserPassword($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('adults_members_records', $data);
    }

    public function checkCodeExists($phone_number, $code)
    {
        $this->db->select('');
        $this->db->where('phone_number', $phone_number);
        $this->db->where('verification_code', $code);
        $this->db->where('verified', 0);
        $this->db->from('user_verification');

        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return $query->result();
        } else {
             return true;
        }
    }

    public function insertCode($data)
    {
        $this->db->insert('user_verification', $data);
    }

    public function activeUser($id, $phone, $code)
    {
        $data = array('active' =>  1);
        $this->db->where('id', $id);
        $this->db->update('adults_members_records', $data);

        return $this->updateVerificationCode($phone, $code);
    }

    public function updateVerificationCode($phone, $code)
    {
        $results = $this->checkCodeExists($phone, $code);
        if ($results) {
            foreach ($results as $result) {
                $id = $result->id;
            }
        }
        $data = array('verified' =>  1);
        $this->db->where('id', $id);
        return $this->db->update('user_verification', $data);
    }
}
