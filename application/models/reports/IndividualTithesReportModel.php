<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndividualTithesReportModel extends CI_Model
{

	/**
	 * @param $user
	 * @return bool
	 */
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

	/**
	 * @param $user
	 * @return bool
	 *
	 */
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


	/**
	 * This function gets the contributions of the user on the given time period
	 * Where uses Name of the User, And Date Between
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @return mixed
	 */
	public function viewMemberTithes($user, $date, $date2)
    {
        $this->db->select('*');
        $this->db->where('NAME', $user);
        $this->db->where("SABBATH_DATE BETWEEN '" .$date. "' AND '". $date2."'", "", false);
        $query = $this->db->get("adults_givings");
        return $query->result();
    }

	/**
	 * Gets all contributions based on the user id and the time period
	 * @param $user
	 * @param string $date
	 * @param string $date2
	 * @return mixed
	 */
	public function memberTithes($user, $date = '', $date2 = '')
	{
		if (empty($date) && empty($date2)) {
			$this->db->select('*');
			$this->db->where('GIVINGS_FK', $user);
			$query = $this->db->get("adults_givings");
		} else {
			$this->db->select('*');
			$this->db->where('GIVINGS_FK', $user);
			$this->db->where("SABBATH_DATE BETWEEN '" .$date. "' AND '". $date2."'", "", false);
			$query = $this->db->get("adults_givings");
		}

		return $query->result();
	}

	/**
	 * @return mixed
	 */
	public function getAllMembers()
    {
        $this->db->select("UPPER(CONCAT((FIRST_NAME),(' '),(OTHER_NAMES))) AS name, ID");
        $this->db->from('adults_members_records');
        $query = $this->db->get();
        return $query->result();
    }

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @param $report
	 * @return bool
	 */
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

	public function membersMonthly($user, $date, $date2, $report)
	{
		$q = "SELECT SUM($report) as $report, DATE_FORMAT(SABBATH_DATE, '%m-%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE GIVINGS_FK = '$user' AND DATE_FORMAT(SABBATH_DATE, '%m-%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%m-%Y')";
		$query = $this->db->query($q);
		if ($query->num_rows()>0) {
			return $query->result();
		} else {
			return false;
		}
	}

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @param $report
	 * @return bool
	 */
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

    /**
     * @param $user
     * @param $date
     * @param $date2
     * @param $report
     * @return bool
     */
    public function memberYearly($user, $date, $date2, $report)
    {
        $q = "SELECT SUM($report) as $report, DATE_FORMAT(SABBATH_DATE, '%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE GIVINGS_FK = '$user' AND DATE_FORMAT(SABBATH_DATE, '%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%Y')";
        $query = $this->db->query($q);
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @return bool
	 */
	public function viewContributionsDate($user, $date, $date2)
    {
        $this->db->select('*');
        $this->db->where('NAME', $user);
        $this->db->where("SABBATH_DATE BETWEEN '" .$date. "' AND '". $date2."'", "", false);
        $query = $this->db->get("adults_givings");
        
        if ($query->num_rows()>0) {
            // var_dump($query->result_array());exit();
            return $query->result_array();
        } else {
            return false;
        }
    }

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @return bool
	 */
	public function viewContributionsMonthly($user, $date, $date2)
    {
        $q = "SELECT SUM(TITHES) AS TITHES,
                SUM(COMBINED_OFFERING) AS COMBINED_OFFERING,
                SUM(CAMP_OFFERING) AS CAMP_OFFERING,
                SUM(CHURCH_BUILDING) AS CHURCH_BUILDING,
                SUM(CONFERENCE) AS CONFERENCE,
                SUM(LOCAL_CHURCH) AS LOCAL_CHURCH,
                SUM(STATION_DEVELOPMENT) AS STATION_DEVELOPMENT,
                DATE_FORMAT(SABBATH_DATE, '%m-%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE NAME LIKE '$user' AND DATE_FORMAT(SABBATH_DATE, '%m-%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%m-%Y')";
        
        $query = $this->db->query($q);
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @return bool
	 */
	public function ContributionsMonthly($user, $date, $date2)
	{
		$q = "SELECT SUM(TITHES) AS TITHES,
                SUM(COMBINED_OFFERING) AS COMBINED_OFFERING,
                SUM(CAMP_OFFERING) AS CAMP_OFFERING,
                SUM(CHURCH_BUILDING) AS CHURCH_BUILDING,
                SUM(CONFERENCE) AS CONFERENCE,
                SUM(LOCAL_CHURCH) AS LOCAL_CHURCH,
                SUM(STATION_DEVELOPMENT) AS STATION_DEVELOPMENT,
                DATE_FORMAT(SABBATH_DATE, '%m-%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE GIVINGS_FK = '$user' AND DATE_FORMAT(SABBATH_DATE, '%m-%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%m-%Y')";

		$query = $this->db->query($q);
		if ($query->num_rows()>0) {
			return $query->result();
		} else {
			return false;
		}
	}

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @return bool
	 */
	public function viewContributionsYearly($user, $date, $date2)
    {
        $q = "SELECT SUM(TITHES) AS TITHES,
                SUM(COMBINED_OFFERING) AS COMBINED_OFFERING,
                SUM(CAMP_OFFERING) AS CAMP_OFFERING,
                SUM(CHURCH_BUILDING) AS CHURCH_BUILDING,
                SUM(CONFERENCE) AS CONFERENCE,
                SUM(LOCAL_CHURCH) AS LOCAL_CHURCH,
                SUM(STATION_DEVELOPMENT) AS STATION_DEVELOPMENT,
                DATE_FORMAT(SABBATH_DATE, '%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE NAME LIKE '$user' AND DATE_FORMAT(SABBATH_DATE, '%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%Y')";
        
        $query = $this->db->query($q);
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

	/**
	 * @param $user
	 * @param $date
	 * @param $date2
	 * @return bool
	 */
	public function ContributionsYearly($user, $date, $date2)
	{
		$q = "SELECT SUM(TITHES) AS TITHES,
                SUM(COMBINED_OFFERING) AS COMBINED_OFFERING,
                SUM(CAMP_OFFERING) AS CAMP_OFFERING,
                SUM(CHURCH_BUILDING) AS CHURCH_BUILDING,
                SUM(CONFERENCE) AS CONFERENCE,
                SUM(LOCAL_CHURCH) AS LOCAL_CHURCH,
                SUM(STATION_DEVELOPMENT) AS STATION_DEVELOPMENT,
                DATE_FORMAT(SABBATH_DATE, '%Y') AS SABBATH_DATE, NAME FROM adults_givings WHERE GIVINGS_FK = '$user' AND DATE_FORMAT(SABBATH_DATE, '%Y') BETWEEN '$date' and '$date2' GROUP BY DATE_FORMAT(SABBATH_DATE, '%Y')";

		$query = $this->db->query($q);
		if ($query->num_rows()>0) {
			return $query->result();
		} else {
			return false;
		}
	}

	/**
	 * @param $data
	 * @return bool
	 */
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

	/**
	 * @param $user
	 * @return bool
	 */
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
