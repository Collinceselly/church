<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndividualTithesReportModel extends CI_Model
{

    public function searchMember($user)
    {
        $this->db->select('*');
        $this->db->from('adults_members_records');
        $this->db->join('givings_records', 'adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
        $this->db->like('adults_members_records.ID_CARD_NUMBER', $user);
        $this->db->or_like('adults_members_records.FIRST_NAME', $user);
        $this->db->or_like('adults_members_records.GENDER', $user);
        $this->db->or_like('adults_members_records.PHONE_NUMBER', $user);

        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewTithes($user)
    {
        $this->db->select('*');
        $this->db->from('givings_records');
        $this->db->join('adults_members_records', 'adults_members_records.ID = givings_records.GIVINGS_FK');
        $this->db->where('givings_records.SABBATH_DATE', $user);

        $query = $this->db->get();

        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewMemberTithes($user, $date, $date2)
    {
        $this->db->select('*');
        $this->db->where('NAME', $user);
        $this->db->where("SABBATH_DATE BETWEEN '" .$date. "' AND '". $date2."'", "", false);
        $query = $this->db->get("adults_givings");
        return $query->result();
    }

    public function getAllMembers()
    {
        $this->db->select("UPPER(CONCAT((FIRST_NAME),(' '),(OTHER_NAMES))) AS name, ID");
        $this->db->from('adults_members_records');
        $query = $this->db->get();
        return $query->result();
    }

    public function viewMonthly($user, $date, $date2, $report)
    {
        $q = "SELECT SUM($report) as $report, DATE_FORMAT(SABBATH_DATE, '%m-%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE NAME LIKE '$user' AND DATE_FORMAT(SABBATH_DATE, '%m-%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%m-%Y')";
        $query = $this->db->query($q);
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewYearly($user, $date, $date2, $report)
    {
        $q = "SELECT SUM($report) as $report, DATE_FORMAT(SABBATH_DATE, '%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE NAME LIKE '$user' AND DATE_FORMAT(SABBATH_DATE, '%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%Y')";
        $query = $this->db->query($q);
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewContributionsDate($user, $date, $date2)
    {
        $this->db->select('*');
        $this->db->where('NAME', $user);
        $this->db->where("SABBATH_DATE BETWEEN '" .$date. "' AND '". $date2."'", "", false);
        $query = $this->db->get("adults_givings");
        
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function firstQuater($data)
    {
        $this->db->select('*');
        $this->db->from('givings_records');
        $this->db->where("SABBATH_DATE BETWEEN " . "'" . $data['2018-01-01'] . "'" . " AND " . "'" . $data['2018-03-31'] . "'");

        $query = $this->db->get();

        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewYear($user)
    {
        $this->db->select('*');
        $this->db->from('givings_records');
        $this->db->join('adults_members_records', 'adults_members_records.ID = givings_records.GIVINGS_FK', 'full');
        $this->db->where('YEAR(SABBATH_DATE)', $user);

        $query = $this->db->get();
        if ($query->num_rows()>0) {
             return $query->result();
        } else {
             return false;
        }
    }
}
