<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Modelalternatif');
		$this->load->library('session');

		if ($this->session->userdata('status') != "login") {
			redirect("Login");
		}
	}

	public function index()
	{
		$data['tittle'] = "Dashboard";
		$data['tblDataalternatif'] = $this->Modelalternatif->getAllData();
		$data['tblDataUji'] = $this->Modelalternatif->getAllDataUji();
		$data['tblAtribut'] = $this->Modelalternatif->getAtribut();
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_home');
		$this->load->view('template/footbar');
	}
}
