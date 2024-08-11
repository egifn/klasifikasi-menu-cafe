<?php
defined('BASEPATH') or exit('No Direct Script Allowed');

/**
 * 
 */
class ModelHasil extends CI_Model
{

	function getAllData($tblName)
	{
		$query = $this->db->get($tblName);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			return $result;
		} else {
			return false;
		}
	}

	function getAllDataRanking()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tblranking', 'tblranking.no_alternatif = tbldataalternatif .no_alternatif');
		$query = $this->db->get();
		return $query;
	}

	function getHasil()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tblranking', 'tblranking.no_alternatif = tbldataalternatif .no_alternatif');
		$this->db->order_by('nilai_ranking', 'ASC');
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function getHistory()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tblhistory', 'tblhistory.no_alternatif = tbldataalternatif .no_alternatif');
		$query = $this->db->get();
		return $query;
	}

	function getKesimpulan()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->join('tblranking', 'tblranking.no_alternatif = tbldataalternatif .no_alternatif');
		$this->db->order_by('nilai_ranking', 'ASC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function savetoDB($tblName, $data)
	{
		$this->db->insert($tblName, $data);
	}

	function save()
	{
		$save = $this->ModelHasil->getKesimpulan();

		foreach ($save->result() as $key => $value) {
			$no = $value->no_alternatif;
			$nama = $value->nama_alternatif;
			$nilai = $value->nilai_ranking;
			$tanggal = date("y-m-d");
			$this->db->query("INSERT INTO tblhistory VALUES (NULL,'$no','$nama','$nilai','$tanggal');");
		}
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
