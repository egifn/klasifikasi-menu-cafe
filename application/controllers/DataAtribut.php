<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class DataAtribut extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelDataMaster');

		$this->load->library('session');
		if ($this->session->userdata('status') != "login") {
			redirect("Login");
		}
	}

	function index()
	{
		$data['tblAtribut'] = $this->ModelDataMaster->getAllData('tblAtribut');
		$data['alert'] = "";

		$data['tittle'] = "Atribut";
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_atribut', $data);
		$this->load->view('template/footbar');
	}

	function addNewDataAtribut()
	{
		// Atribut
		$vKodeAtribut = $this->input->post('txKodeAtribut');
		$vAtribut = $this->input->post('txAtribut');

		// Sub-atribut
		$vKodeAlter = $this->input->post('kodeAtribut');
		$vNilai = $this->input->post('txNilai');
		$vKeterangan = $this->input->post('txKeterangan');


		// Atribut
		$data = array(
			'kd_atribut' => $vKodeAtribut,
			'atribut' => $vAtribut,

		);

		// $this->db->query("INSERT INTO tblsubatribut VALUES (NULL,'$vKodeAtribut','Baik',1);");
		// $this->db->query("INSERT INTO tblsubatribut VALUES (NULL,'$vKodeAtribut','Rusak Ringan',2);");
		// $this->db->query("INSERT INTO tblsubatribut VALUES (NULL,'$vKodeAtribut','Rusak Parah',3);");
		// $this->db->query("INSERT INTO tblsubatribut VALUES (NULL,'$vKodeAtribut','Kritis',4);");
		$this->ModelDataMaster->savetoDB('tblAtribut', $data);
		$this->db->query("ALTER TABLE tbldatauji ADD $vKodeAtribut int (11) DEFAULT FLOOR(RAND()*(4-1+1)+1);");
		$this->db->query("ALTER TABLE tbldatauji_konver ADD $vKodeAtribut double DEFAULT 0 NOT NULL;");
		$this->db->query("INSERT INTO tblnilaiopt VALUES (NULL,'$vKodeAtribut',0,0);");

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');

		redirect('DataAtribut');
	}

	function removeData($ID)
	{
		$data = array('kd_atribut' => $ID);
		$this->ModelDataMaster->delfromDB('tblAtribut', $data);
		$delCol = $this->uri->segment(3);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');

		$this->db->query("ALTER TABLE tbldatauji DROP $delCol;");
		$this->db->query("ALTER TABLE tbldatauji_konver DROP $delCol;");
		$this->db->query("DELETE FROM tblsubatribut WHERE kd_atribut = '$delCol';");
		$this->db->query("DELETE FROM tblnilaiopt WHERE kd_atribut = '$delCol';");
		redirect('DataAtribut');
	}

	function updateData()
	{
		$vKodeAtribut = $this->input->post('kodeAtribut');
		$vNamaAtribut = $this->input->post('atribut');
		$vUserName = $this->session->userdata('nama');

		$data = array(
			'atribut' => $vNamaAtribut,
		);

		$where = array('kd_atribut' => $vKodeAtribut);

		$this->ModelDataMaster->updtoDB('tblAtribut', $data, $where);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');

		redirect('DataAtribut');
	}
}
