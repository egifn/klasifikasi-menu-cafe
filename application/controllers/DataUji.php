<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class DataUji extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelDataUji');
		$this->load->model('Modelalternatif');
		$this->load->model('ModelHasil');
		$this->load->library('session');
	}

	function index()
	{
		// Perhitungan
		$this->db->query(" TRUNCATE TABLE tblnilaiopt ");
		$nilaiUji = $this->Modelalternatif->getDataPerhitungan();
		$jmlAtribut = $this->db->query("SELECT kd_atribut FROM tblatribut")->result_array();
		$jmlK = count($jmlAtribut);

		$data['tbldataujikonver'] = $this->ModelDataUji->getAllDataKonver();
		$data['tbldataujikonverbobot'] = $this->ModelDataUji->getAllDataKonverBobot();
		$data['tblAtribut'] = $this->Modelalternatif->getAtribut();
		$data['tblRanking'] = $this->ModelDataUji->getAllDataRanking();
		$data['datauji'] = $this->ModelDataUji->getAllDatauji();
		$data["dataranking"] = $this->ModelHasil->getAllDataRanking();
		$data["datahasil"] = $this->ModelHasil->getHasil();
		$data["datakesimpulan"] = $this->ModelHasil->getKesimpulan();
		$data['tittle'] = "Olah Data";

		$this->load->view('template/sidebar', $data);
		$this->load->view('view_datauji');
		$this->load->view('template/footbar');
	}
}
