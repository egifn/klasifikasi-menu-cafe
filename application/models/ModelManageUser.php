<?php 
	defined('BASEPATH')or exit('No Direct Script Allowed');

	/**
	 * 
	 */
	class ModelManageUser extends CI_Model
	{
		
		function getAllData($tblName)
		{
			$query = $this->db->get($tblName);
			if ($query->num_rows()>0) {
				$result = $query->result_array();
				return $result;
			}else{
				return false;
			}
		}

		function savetoDB($tblName, $data)
		{
			$this->db->insert($tblName,$data);
		}

		function delfromDB($tblName, $Where)
		{
			$this->db->where($Where);
			$this->db->delete($tblName);
		}

		function updtoDB($tblName, $data, $where)
		{
			$this->db->where($where);
			$this->db->update($tblName,$data);
		}
	}
 ?>