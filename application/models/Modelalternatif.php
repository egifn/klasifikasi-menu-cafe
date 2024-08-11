<?php
defined('BASEPATH') or exit('No Direct Script Allowed');

/**
 * 
 */
class Modelalternatif extends CI_Model
{

	function getAllData()
	{
		$this->db->select('*');
		$this->db->from('tbldataalternatif ');
		$this->db->order_by('no_alternatif', 'ASC');
		$query = $this->db->get();
		return $query;
	}

	function getAllNode()
	{
		$this->db->select('*');
		$this->db->from('node');
		$query = $this->db->get();
		return $query;
	}

	function getAllNode2()
	{
		$this->db->select('*');
		$this->db->from('node2');
		$query = $this->db->get();
		return $query;
	}

	function getAllNode3()
	{
		$this->db->select('*');
		$this->db->from('node3');
		$query = $this->db->get();
		return $query;
	}

	function getDataPerhitungan()
	{
		$this->db->select('*');
		$this->db->from('tbldatauji ');
		$this->db->order_by('no_datauji', 'ASC');
		$query = $this->db->get();
		return $query;
	}

	function getAtribut()
	{
		$this->db->select('*');
		$this->db->from('tblatribut');
		$query = $this->db->get();
		return $query;
	}

	function getAllDataUji()
	{
		$this->db->select('*');
		$this->db->from('tbldatauji');
		$query = $this->db->get();
		return $query;
	}

	function countData($tblName)
	{
		$query = $this->db->get($tblName);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			return $result;
		} else {
			return false;
		}
	}

	function delfromDB($tblName, $Where)
	{
		$this->db->where($Where);
		$this->db->delete($tblName);
	}

	function updtoDB($post)
	{
		$jumlahatribut = $this->db->query("SELECT kd_atribut FROM tblatribut ")->result_array();
		$JmlAtribut = count($jumlahatribut);

		// $params['no_alternatif'] = $post['no_alternatif'];
		$params1['no_alternatif'] = $post['no_alternatif'];
		$params1['nama_alternatif'] = $post['nama_alternatif'];
		$params1['jenis_menu'] = $post['jenis_menu'];
		$params1['harga'] = $post['harga'];
		$params1['terjual'] = $post['jumlah_terjual'];
		$params1['keterangan'] = $post['label'];

		$this->db->where('no_alternatif', $post['no_alternatif']);
		$this->db->update('tbldataalternatif ', $params1);
	}

	function updtoalter($post)
	{
		$jumlahatribut = $this->db->query("SELECT kd_atribut FROM tblatribut ")->result_array();
		$JmlAtribut = count($jumlahatribut);

		$params['nama_datauji'] = $post['nama_menu'];
		$params['jenis_menu'] = $post['jenis_menu'];
		$params['harga'] = $post['harga'];
		$params['jumlah_terjual'] = $post['jumlah_terjual'];

		$this->db->where('ID', $post['ID']);
		$this->db->update('tbldatauji', $params);
	}

	function saveDataAlternative($post)
	{
		$params['no_alternatif'] = $post['no_alternatif'];
		$params['nama_alternatif'] = $post['nama_alternatif'];
		$params['jenis_menu'] = $post['jenis_menu'];
		$params['harga'] = $post['harga'];
		$params['terjual'] = $post['jumlah_terjual'];
		$params['keterangan'] = $post['label'];

		$this->db->insert('tbldataalternatif ', $params);
	}

	function saveDataPerhitungan($post)
	{
		$jumlahatribut = $this->db->query("SELECT kd_atribut FROM tblatribut ")->result_array();
		$JmlAtribut = count($jumlahatribut);
		$jumlahDatauji = $this->db->query("SELECT no_datauji FROM tbldatauji ")->result_array();
		$JmlDatauji = count($jumlahDatauji);
		$id = $JmlDatauji + 1;

		$params['ID'] = $id;
		$params['no_datauji'] = $post['no_datauji'];
		$params['nama_datauji'] = $post['nama_menu'];
		$params['jenis_menu'] = $post['jenis_menu'];
		$params['harga'] = $post['harga'];
		$params['jumlah_terjual'] = $post['jumlah_terjual'];

		$this->db->insert('tbldatauji', $params);

		$params1['id_konver'] = $id;
		$params1['no_datauji'] = $post['no_datauji'];
		$this->db->insert('tbldatauji_konver', $params1);

		$params2['id_bobot'] = $id;
		$params2['no_datauji'] = $post['no_datauji'];
		$this->db->insert('tbldatauji_konver_bobot', $params2);

		$params3['ID'] = $id;
		$params3['no_datauji'] = $post['no_datauji'];
		$this->db->insert('tblranking', $params3);
	}
}
