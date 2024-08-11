<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class DataPohonKeputusan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Modelalternatif');
		$this->load->library('session');
	}

	function index()
	{
		// $this->db->query(" TRUNCATE TABLE node ");
		$makanan = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'makanan'")->result_array();
		$minuman = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'minuman'")->result_array();

		$jml1 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Lebih dari 20000'")->result_array();
		$jml2 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '15000 - 20000'")->result_array();
		$jml3 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '10000 - 14999'")->result_array();
		$jml4 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Kurang dari 10000'")->result_array();

		$t1 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Lebih dari 100'")->result_array();
		$t2 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = '50 - 100'")->result_array();
		$t3 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Kurang dari 50'")->result_array();
		// var_dump($t1);
		// var_dump($t3);
		// die; 

		$data['node'] = $this->Modelalternatif->getAllNode();
		$data['node2'] = $this->Modelalternatif->getAllNode2();
		$data['node3'] = $this->Modelalternatif->getAllNode3();
		$data['tblDataUji'] = $this->Modelalternatif->getAllDataUji();
		$data['tblAtribut'] = $this->Modelalternatif->getAtribut();
		$data['tittle'] = "Proses Perhitungan";

		$this->load->view('template/sidebar', $data);
		$this->load->view('view_pohonkeputusan', $data);
		$this->load->view('template/footbar');
	}
}
