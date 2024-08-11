<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class DataSub extends CI_Controller
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
		$data['tblAtribut'] = $this->ModelDataMaster->getAllData('tblsubatribut ');

		$data['tittle'] = "Data Sub Atribut";
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_subatribut', $data);
		$this->load->view('template/footbar');
	}


	function addNewDataAlter()
	{
		$vKodeAlter = $this->input->post('txKodeKrit');
		$vNilai = $this->input->post('txNilai');
		$vKeterangan = $this->input->post('txKeterangan');



		$data = array(
			'kd_atribut' => $vKodeAlter,
			'nilai' => $vNilai,
			'keterangan' => $vKeterangan
		);

		$this->ModelDataMaster->savetoDB('tblsubatribut ', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');

		redirect('DataSub');
	}

	function removeDataAlter($ID)
	{
		$data = array('id_subatribut' => $ID);
		$this->ModelDataMaster->delfromDB('tblsubatribut ', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');

		redirect('DataSub');
	}


	function updateDataAlter()
	{
		$vIdsub = $this->input->post('id_subatribut');
		$vKodeAtribut = $this->input->post('kd_atribut');
		$vNilai = $this->input->post('txNilai');
		$vKeterangan = $this->input->post('txKeterangan');

		// var_dump($this->input->post());

		$data = array(
			'kd_atribut' => $vKodeAtribut,
			'nilai' => $vNilai,
			'keterangan' => $vKeterangan
		);

		$where = array('id_subatribut' => $vIdsub);
		$this->ModelDataMaster->updtoDB('tblsubatribut ', $data, $where);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');

		redirect('DataSub');
	}
}
