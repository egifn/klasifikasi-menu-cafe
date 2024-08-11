<?php
defined('BASEPATH') or exit('No Direct Script Allowed');

/**
 * 
 */
class ModelDataUji extends CI_Model
{

	function getAllData($tblName)
	{
		$this->db->from($tblName);
		$this->db->order_by('ID ', 'asc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			return $result;
		} else {
			return false;
		}
	}

	function getAllDataUji()
	{
		$this->db->select('*');
		$this->db->from('tbldatauji');
		$query = $this->db->get();
		return $query;
	}

	function getAllDataKonver()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tbldatauji_konver', 'tbldatauji_konver.no_alternatif = tbldataalternatif .no_alternatif');
		$query = $this->db->get();
		return $query;
	}

	function getAllDataRanking()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tblranking', 'tblranking.no_alternatif = tbldataalternatif .no_alternatif');
		$query = $this->db->get();
		return $query;
	}

	function getAllDataKonverBobot()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tbldatauji_konver_bobot', 'tbldatauji_konver_bobot.no_alternatif = tbldataalternatif .no_alternatif');
		$query = $this->db->get();
		return $query;
	}

	function nilaiopt()
	{
		$this->db->select('*');
		$this->db->from('tblnilaiopt');
		$query = $this->db->get();
		return $query;
	}

	function savetoDB($tblName, $data)
	{
		$this->db->insert($tblName, $data);
	}

	function delfromDB($tblName, $Where)
	{
		$this->db->where($Where);
		$this->db->delete($tblName);
	}

	function updtoDB($tblName, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($tblName, $data);
	}

	function getCustData($strQuery)
	{

		$query = $this->db->query($strQuery);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			return $result;
		} else {
			return false;
		}
	}
}
