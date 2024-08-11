<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class ProsesPerhitungan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Modelalternatif');
        $this->load->library('session');
    }

    function index()
    {
        $data['tblDataalternatif'] = $this->Modelalternatif->getDataPerhitungan();
        $data['tblDataUji'] = $this->Modelalternatif->getAllDataUji();
        $data['tblAtribut'] = $this->Modelalternatif->getAtribut();
        $data['tittle'] = "Proses Perhitungan";
        $this->load->view('template/sidebar', $data);
        $this->load->view('view_alternatif', $data);
        $this->load->view('template/footbar');
    }

    function addNewData()
    {
        $post = $this->input->post(null, TRUE);
        $this->Modelalternatif->saveDataPerhitungan($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');

        redirect('ProsesPerhitungan');
    }

    public function updateData()
    {
        $post = $this->input->post(null, TRUE);
        $this->Modelalternatif->updtoalter($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');

        redirect("ProsesPerhitungan");
    }

    function removeData($ID)
    {
        $data = array('ID' => $ID);

        $this->Modelalternatif->delfromDB('tbldatauji', $data);
        $this->db->query('DELETE FROM tbldatauji_konver WHERE id_konver = ' . $ID . '');
        $this->db->query('DELETE FROM tblranking WHERE ID = ' . $ID . '');
        // $this->Modelalternatif->delfromDB('tbldatauji_konver', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');

        redirect('ProsesPerhitungan');
    }
}
