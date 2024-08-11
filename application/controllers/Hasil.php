<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->model('ModelHasil');
		$this->load->model('ModelDataUji');

		if ($this->session->userdata('status') != "login") {
			redirect("Login");
		}
	}

	public function index()
	{
		$data["dataranking"] = $this->ModelHasil->getAllDataRanking();
		$data["datahasil"] = $this->ModelHasil->getHasil();
		$data["datakesimpulan"] = $this->ModelHasil->getKesimpulan();
		$data["datahistory"] = $this->ModelHasil->getHistory();

		$data['tittle'] = "Hasil";
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_hasil', $data);
		$this->load->view('template/footbar');
	}

	public function Cetak()
	{
		$data["dataranking"] = $this->ModelHasil->getAllDataRanking();
		$data['tblRanking'] = $this->ModelDataUji->getAllDataRanking();

		$data["datahasil"] = $this->ModelHasil->getHasil();
		$data["datakesimpulan"] = $this->ModelHasil->getKesimpulan();

		$data['tittle'] = "Cetak Data";
		$this->load->view('cetak', $data);
		$this->load->view('template/footbar');
	}

	public function Save()
	{
		$this->ModelHasil->save();
		redirect("Hasil");
	}
}
