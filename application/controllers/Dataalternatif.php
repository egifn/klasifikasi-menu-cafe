<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Dataalternatif extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Modelalternatif');
		$this->load->library('session');
	}

	function index()
	{
		$data['tblDataalternatif'] = $this->Modelalternatif->getAllData();
		$data['tblDataUji'] = $this->Modelalternatif->getAllDataUji();
		$data['tblAtribut'] = $this->Modelalternatif->getAtribut();
		$data['tittle'] = "Data alternatif";
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_dataalternatif', $data);
		$this->load->view('template/footbar');
	}

	function ProsesPerhitungan()
	{
		$data['tblDataalternatif'] = $this->Modelalternatif->getAllData();
		$data['tblDataUji'] = $this->Modelalternatif->getAllDataUji();
		$data['tblAtribut'] = $this->Modelalternatif->getAtribut();
		$data['tittle'] = "Proses Perhitungan";
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_alternatif', $data);
		$this->load->view('template/footbar');
	}

	function PohonKeputusan()
	{
		$this->db->query("UPDATE tblnilaigain SET gain1 = 0");
		$this->db->query("UPDATE tblnilaigain SET gain2 = 0");
		$this->db->query("UPDATE tblnilaigain SET gain3 = 0");

		$makanan = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'Makanan'")->result_array();
		$makananl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'Makanan' AND keterangan = 'Laris'")->result_array();
		$makanantl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'Makanan' AND keterangan = 'Tidak Laris'")->result_array();
		$datamakanan = implode($makanan[0]);
		$datamakananl = implode($makananl[0]);
		$datamakanantl = implode($makanantl[0]);

		$minuman = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'Minuman'")->result_array();
		$minumanl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'Minuman' AND keterangan = 'Laris'")->result_array();
		$minumantl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalternatif WHERE jenis_menu = 'Minuman' AND keterangan = 'Tidak Laris'")->result_array();
		$dataminuman = implode($minuman[0]);
		$dataminumanl = implode($minumanl[0]);
		$dataminumantl = implode($minumantl[0]);

		$jml1 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Lebih dari 20000'")->result_array();
		$jmll1 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Lebih dari 20000' AND keterangan = 'Laris'")->result_array();
		$jmltl1 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Lebih dari 20000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml1 = implode($jml1[0]);
		$datajmll1 = implode($jmll1[0]);
		$datajmltl1 = implode($jmltl1[0]);

		$jml2 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '15000 - 20000'")->result_array();
		$jmll2 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '15000 - 20000' AND keterangan = 'Laris'")->result_array();
		$jmltl2 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '15000 - 20000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml2 = implode($jml2[0]);
		$datajmll2 = implode($jmll2[0]);
		$datajmltl2 = implode($jmltl2[0]);

		$jml3 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '10000 - 14999'")->result_array();
		$jmll3 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '10000 - 14999' AND keterangan = 'Laris'")->result_array();
		$jmltl3 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = '10000 - 14999' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml3 = implode($jml3[0]);
		$datajmll3 = implode($jmll3[0]);
		$datajmltl3 = implode($jmltl3[0]);

		$jml4 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Kurang dari 10000'")->result_array();
		$jmll4 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Kurang dari 10000' AND keterangan = 'Laris'")->result_array();
		$jmltl4 = $this->db->query("SELECT count(harga) FROM tbldataalternatif WHERE harga = 'Kurang dari 10000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml4 = implode($jml4[0]);
		$datajmll4 = implode($jmll4[0]);
		$datajmltl4 = implode($jmltl4[0]);

		$t1 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Lebih dari 100'")->result_array();
		$tl1 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Lebih dari 100' AND keterangan = 'Laris'")->result_array();
		$ttl1 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Lebih dari 100' AND keterangan = 'Tidak Laris'")->result_array();
		$datat1 = implode($t1[0]);
		$datatl1 = implode($tl1[0]);
		$datattl1 = implode($ttl1[0]);

		$t2 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = '50 - 100'")->result_array();
		$tl2 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = '50 - 100' AND keterangan = 'Laris'")->result_array();
		$ttl2 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = '50 - 100' AND keterangan = 'Tidak Laris'")->result_array();
		$datat2 = implode($t2[0]);
		$datatl2 = implode($tl2[0]);
		$datattl2 = implode($ttl2[0]);

		$t3 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Kurang dari 50'")->result_array();
		$tl3 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Kurang dari 50' AND keterangan = 'Laris'")->result_array();
		$ttl3 = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE terjual = 'Kurang dari 50' AND keterangan = 'Tidak Laris'")->result_array();
		$datat3 = implode($t3[0]);
		$datatl3 = implode($tl3[0]);
		$datattl3 = implode($ttl3[0]);

		$total = $this->db->query("SELECT count(no_alternatif) FROM tbldataalternatif ")->result_array();
		$l = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE keterangan = 'Laris'")->result_array();
		$tl = $this->db->query("SELECT count(terjual) FROM tbldataalternatif WHERE keterangan = 'Tidak Laris'")->result_array();
		$datatotal = implode($total[0]);
		$totall = implode($l[0]);
		$totaltl = implode($tl[0]);

		$jml_data  = ["$datatotal", "$datamakanan", "$dataminuman", "$datajml1", "$datajml2", "$datajml3", "$datajml4", "$datat1", "$datat2", "$datat3"];
		$jml_l     = ["$totall", "$datamakananl", "$dataminumanl", "$datajmll1", "$datajmll2", "$datajmll3", "$datajmll4", "$datatl1", "$datatl2", "$datatl3"];
		$jml_tl    = ["$totaltl", "$datamakanantl", "$dataminumantl", "$datajmltl1", "$datajmltl2", "$datajmltl3", "$datajmltl4", "$datattl1", "$datattl2", "$datattl3"];
		$data_node = $this->db->query("SELECT * FROM node");

		// var_dump($jml_l[5]);
		// die;

		$i = 0;
		foreach ($data_node->result() as $key => $node) {
			$this->db->query("UPDATE node  SET jumlah_data = $jml_data[$i], laris = $jml_l[$i], tidak_laris = $jml_tl[$i] WHERE atribut = '$node->atribut'");
			$i++;
		}

		// enthropi
		foreach ($data_node->result() as $key => $node) {
			if ($node->laris == 0) {
				$enthropy = 0 + ((-$node->tidak_laris / $node->jumlah_data) * (log((-$node->tidak_laris) / $node->jumlah_data, 2)));
			} elseif ($node->tidak_laris == 0) {
				$enthropy = ((-$node->laris / $node->jumlah_data) * (log($node->laris / $node->jumlah_data, 2))) + 0;
			} elseif ($node->jumlah_data == 0) {
				$enthropy = 0;
			} elseif ($node->laris != 0 || $node->tidak_laris != 0 || $node->jumlah_data != 0) {
				$enthropy = ((-$node->laris / $node->jumlah_data) * (log($node->laris / $node->jumlah_data, 2))) + (((-$node->tidak_laris) / $node->jumlah_data) * (log($node->tidak_laris / $node->jumlah_data, 2)));
			} elseif ($node->laris == 0 && $node->tidak_laris == 0) {
				$enthropy = 0 + ((-$node->tidak_laris / $node->jumlah_data) * (log((-$node->tidak_laris) / $node->jumlah_data, 2)));
			}

			$this->db->query("UPDATE node  SET entrophy = $enthropy WHERE atribut = '$node->atribut'");
		}

		$jd = $this->db->query("SELECT * FROM node WHERE atribut = 'total'")->result_array();
		$jumlahdata = $jd[0]['jumlah_data'];

		// gain
		foreach ($data_node->result() as $key => $node) {
			if ($node->atribut == 'Total') {
				$gain = 0;
			} else {
				// var_dump($jml_data);
				$gain = ($node->jumlah_data / $jumlahdata) * $node->entrophy;
			}
			$hasilgain[] = $gain;
			unset($gain);
		}

		$ent = $jd[0]['entrophy'];
		// var_dump($ent);
		// die;
		$jmldata = $ent - ($hasilgain[1] + $hasilgain[2]);
		$harga = $ent - ($hasilgain[3] + $hasilgain[4] + $hasilgain[5] + $hasilgain[6]);
		$terjual = $ent - ($hasilgain[7] + $hasilgain[8] + $hasilgain[9]);

		$this->db->query("UPDATE tblnilaigain  SET gain1 = $jmldata WHERE atribut = 'Jenis Menu'");
		$this->db->query("UPDATE tblnilaigain  SET gain1 = $harga WHERE atribut = 'Harga'");
		$this->db->query("UPDATE tblnilaigain  SET gain1 = $terjual WHERE atribut = 'Terjual'");

		$this->db->query(" TRUNCATE TABLE tbldataalter ");
		$this->db->query("INSERT INTO tbldataalter SELECT * FROM tbldataalternatif ");

		$gainbesar1 = $this->db->query("SELECT * FROM tblnilaigain ORDER BY gain1 DESC limit 1")->result_array();
		$dtgain = $gainbesar1[0]['atribut'];
		// $gainbesar1 = $this->db->query("SELECT * FROM node Where  ORDER BY gain1 DESC limit 1")->result_array();

		if ($dtgain == 'Jenis Menu') {
			$datahapus = $this->db->query("SELECT * FROM node WHERE atribut = 'Makanan' OR atribut = 'Minuman' ORDER BY entrophy ASC limit 1")->result_array();
			$dthapus = $datahapus[0]['atribut'];
			$this->db->query("DELETE FROM tbldataalter WHERE jenis_menu = '$dthapus'");
		} elseif ($dtgain == 'Harga') {
			$datahapus = $this->db->query("SELECT * FROM node WHERE atribut = 'Lebih dari 20000' OR atribut = '15000 - 20000' OR  atribut = '10000 - 14999' OR atribut = 'Kurang dari 10000' ORDER BY entrophy ASC limit 1")->result_array();
			$dthapus = $datahapus[0]['atribut'];
			$this->db->query("DELETE FROM tbldataalter WHERE harga = '$dthapus'");
		} else {
			$datahapus = $this->db->query("SELECT * FROM node WHERE atribut = 'Lebih dari 100' OR atribut = '50 - 100' OR atribut = 'Kurang dari 50' ORDER BY entrophy ASC limit 1")->result_array();
			$dthapus = $datahapus[0]['atribut'];
			$this->db->query("DELETE FROM tbldataalter WHERE terjual  = '$dthapus'");
		}

		// die;
		$this->db->query(" TRUNCATE TABLE node2 ");

		$makanan = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Makanan'")->result_array();
		$makananl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Makanan' AND keterangan = 'Laris'")->result_array();
		$makanantl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Makanan' AND keterangan = 'Tidak Laris'")->result_array();
		$datamakanan = implode($makanan[0]);
		$datamakananl = implode($makananl[0]);
		$datamakanantl = implode($makanantl[0]);

		$minuman = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Minuman'")->result_array();
		$minumanl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Minuman' AND keterangan = 'Laris'")->result_array();
		$minumantl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Minuman' AND keterangan = 'Tidak Laris'")->result_array();
		$dataminuman = implode($minuman[0]);
		$dataminumanl = implode($minumanl[0]);
		$dataminumantl = implode($minumantl[0]);

		$jml1 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Lebih dari 20000'")->result_array();
		$jmll1 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Lebih dari 20000' AND keterangan = 'Laris'")->result_array();
		$jmltl1 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Lebih dari 20000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml1 = implode($jml1[0]);
		$datajmll1 = implode($jmll1[0]);
		$datajmltl1 = implode($jmltl1[0]);

		$jml2 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '15000 - 20000'")->result_array();
		$jmll2 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '15000 - 20000' AND keterangan = 'Laris'")->result_array();
		$jmltl2 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '15000 - 20000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml2 = implode($jml2[0]);
		$datajmll2 = implode($jmll2[0]);
		$datajmltl2 = implode($jmltl2[0]);

		$jml3 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '10000 - 14999'")->result_array();
		$jmll3 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '10000 - 14999' AND keterangan = 'Laris'")->result_array();
		$jmltl3 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '10000 - 14999' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml3 = implode($jml3[0]);
		$datajmll3 = implode($jmll3[0]);
		$datajmltl3 = implode($jmltl3[0]);

		$jml4 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Kurang dari 10000'")->result_array();
		$jmll4 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Kurang dari 10000' AND keterangan = 'Laris'")->result_array();
		$jmltl4 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Kurang dari 10000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml4 = implode($jml4[0]);
		$datajmll4 = implode($jmll4[0]);
		$datajmltl4 = implode($jmltl4[0]);

		$t1 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Lebih dari 100'")->result_array();
		$tl1 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Lebih dari 100' AND keterangan = 'Laris'")->result_array();
		$ttl1 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Lebih dari 100' AND keterangan = 'Tidak Laris'")->result_array();
		$datat1 = implode($t1[0]);
		$datatl1 = implode($tl1[0]);
		$datattl1 = implode($ttl1[0]);

		$t2 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = '50 - 100'")->result_array();
		$tl2 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = '50 - 100' AND keterangan = 'Laris'")->result_array();
		$ttl2 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = '50 - 100' AND keterangan = 'Tidak Laris'")->result_array();
		$datat2 = implode($t2[0]);
		$datatl2 = implode($tl2[0]);
		$datattl2 = implode($ttl2[0]);

		$t3 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Kurang dari 50'")->result_array();
		$tl3 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Kurang dari 50' AND keterangan = 'Laris'")->result_array();
		$ttl3 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Kurang dari 50' AND keterangan = 'Tidak Laris'")->result_array();
		$datat3 = implode($t3[0]);
		$datatl3 = implode($tl3[0]);
		$datattl3 = implode($ttl3[0]);

		$total = $this->db->query("SELECT count(no_alternatif) FROM tbldataalter ")->result_array();
		$l = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE keterangan = 'Laris'")->result_array();
		$tl = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE keterangan = 'Tidak Laris'")->result_array();
		$datatotal = implode($total[0]);
		$totall = implode($l[0]);
		$totaltl = implode($tl[0]);

		$jml_data  = ["$datatotal", "$datamakanan", "$dataminuman", "$datajml1", "$datajml2", "$datajml3", "$datajml4", "$datat1", "$datat2", "$datat3"];
		$jml_l     = ["$totall", "$datamakananl", "$dataminumanl", "$datajmll1", "$datajmll2", "$datajmll3", "$datajmll4", "$datatl1", "$datatl2", "$datatl3"];
		$jml_tl    = ["$totaltl", "$datamakanantl", "$dataminumantl", "$datajmltl1", "$datajmltl2", "$datajmltl3", "$datajmltl4", "$datattl1", "$datattl2", "$datattl3"];
		$data_node = $this->db->query("SELECT * FROM node");


		$i = 0;
		foreach ($data_node->result() as $key => $node) {
			$this->db->query("INSERT INTO node2 (atribut,jumlah_data,laris,tidak_laris) VALUES ('$node->atribut','$jml_data[$i]', '$jml_l[$i]',  '$jml_tl[$i]')");
			$i++;
		}
		if ($dtgain == 'Jenis Menu') {
			$this->db->query("DELETE FROM node2 WHERE atribut = 'Makanan' OR atribut = 'Minuman' ");
		} elseif ($dtgain == 'Harga') {
			$this->db->query("DELETE FROM node2 WHERE atribut = 'Lebih dari 20000' OR atribut = '15000 - 20000' OR atribut = '10000 - 14999' OR atribut = 'Kurang dari 10000' ");
		} else {
			$this->db->query("DELETE FROM node2 WHERE atribut = 'Lebih dari 100' OR atribut = '50 - 100' OR atribut = 'Kurang dari 50' ");
		}


		$data_node2 = $this->db->query("SELECT * FROM node2");

		// enthropi
		foreach ($data_node2->result() as $key => $node) {
			if ($node->laris == 0) {
				$enthropy = 0 + ((-$node->tidak_laris / $node->jumlah_data) * (log((-$node->tidak_laris) / $node->jumlah_data, 2)));
			} elseif ($node->tidak_laris == 0) {
				$enthropy = ((-$node->laris / $node->jumlah_data) * (log($node->laris / $node->jumlah_data, 2))) + 0;
			} elseif ($node->jumlah_data == 0) {
				$enthropy = 0;
			} elseif ($node->laris != 0 || $node->tidak_laris != 0 || $node->jumlah_data != 0) {
				$enthropy = ((-$node->laris / $node->jumlah_data) * (log($node->laris / $node->jumlah_data, 2))) + (((-$node->tidak_laris) / $node->jumlah_data) * (log($node->tidak_laris / $node->jumlah_data, 2)));
			}
			// var_dump($enthropy);
			// die;
			$this->db->query("UPDATE node2  SET entrophy = $enthropy WHERE atribut = '$node->atribut'");
		}

		$jd2 = $this->db->query("SELECT * FROM node2 WHERE atribut = 'total'")->result_array();
		$jumlahdata2 = $jd2[0]['jumlah_data'];


		$data_node2 = $this->db->query("SELECT * FROM node2");

		//gain
		foreach ($data_node2->result() as $key => $node3) {

			if ($node3->atribut == 'Total') {
				$gain = 0;
			} else {
				$gain = ($node3->jumlah_data / $jumlahdata2) * $node3->entrophy;
			}
			$hasilgain2[] = $gain;
			unset($gain);
		}
		$batas = $this->db->query("SELECT max(gain1) FROM tblnilaigain ")->result_array();
		$gain1 = implode($batas[0]);
		$maks = $this->db->query("SELECT atribut FROM tblnilaigain WHERE gain1 = $gain1 ")->result_array();
		$gain1max = implode($maks[0]);
		// var_dump($gain1max);
		// die;
		$ent2 = $jd2[0]['entrophy'];

		if ($gain1max == 'Terjual') {
			$jmldata2 = $ent2 - ($hasilgain2[1] + $hasilgain2[2]);
			$harga2 = $ent2 - ($hasilgain2[3] + $hasilgain2[4] + $hasilgain2[5] + $hasilgain2[6]);
			$this->db->query("UPDATE tblnilaigain  SET gain2 = $jmldata2 WHERE atribut = 'Jenis Menu'");
			$this->db->query("UPDATE tblnilaigain  SET gain2 = $harga2 WHERE atribut = 'Harga'");
		} elseif ($gain1max == 'Harga') {
			$jmldata2 = $ent2 - ($hasilgain2[1] + $hasilgain2[2]);
			$terjual2 = $ent2 - ($hasilgain2[7] + $hasilgain2[8] + $hasilgain2[9]);
			$this->db->query("UPDATE tblnilaigain  SET gain2 = $jmldata2 WHERE atribut = 'Jenis Menu'");
			$this->db->query("UPDATE tblnilaigain  SET gain2 = $terjual2 WHERE atribut = 'Terjual'");
		} elseif ($gain1max == 'Jenis Menu') {
			$harga2 = $ent2 - ($hasilgain2[3] + $hasilgain2[4] + $hasilgain2[5] + $hasilgain2[6]);
			$terjual2 = $ent2 - ($hasilgain2[7] + $hasilgain2[8] + $hasilgain2[9]);
			$this->db->query("UPDATE tblnilaigain  SET gain2 = $harga2 WHERE atribut = 'Harga'");
			$this->db->query("UPDATE tblnilaigain  SET gain2 = $terjual2 WHERE atribut = 'Terjual'");
		}

		/////////////////////////////////// 3 

		$gainbesar2 = $this->db->query("SELECT * FROM tblnilaigain ORDER BY gain2 DESC limit 1")->result_array();
		$dtgain2 = $gainbesar2[0]['atribut'];

		if ($dtgain2 == 'Jenis Menu') {
			$datahapus = $this->db->query("SELECT * FROM node2 WHERE atribut = 'Makanan' OR atribut = 'Minuman' ORDER BY entrophy ASC limit 1")->result_array();
			$dthapus = $datahapus[0]['atribut'];
			$this->db->query("DELETE FROM tbldataalter WHERE jenis_menu = '$dthapus'");
		} elseif ($dtgain2 == 'Harga') {
			$datahapus = $this->db->query("SELECT * FROM node2 WHERE atribut = 'Lebih dari 20000' OR atribut = '15000 - 20000' OR  atribut = '10000 - 14999' OR atribut = 'Kurang dari 10000' ORDER BY entrophy ASC limit 1")->result_array();
			$dthapus = $datahapus[0]['atribut'];
			$this->db->query("DELETE FROM tbldataalter WHERE harga = '$dthapus'");
		} else {
			$datahapus = $this->db->query("SELECT * FROM node2 WHERE atribut = 'Lebih dari 100' OR atribut = '50 - 100' OR atribut = 'Kurang dari 50' ORDER BY entrophy ASC limit 1")->result_array();
			$dthapus = $datahapus[0]['atribut'];
			$this->db->query("DELETE FROM tbldataalter WHERE terjual  = '$dthapus'");
		}

		$this->db->query(" TRUNCATE TABLE node3 ");

		$makanan = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Makanan'")->result_array();
		$makananl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Makanan' AND keterangan = 'Laris'")->result_array();
		$makanantl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Makanan' AND keterangan = 'Tidak Laris'")->result_array();
		$datamakanan = implode($makanan[0]);
		$datamakananl = implode($makananl[0]);
		$datamakanantl = implode($makanantl[0]);

		$minuman = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Minuman'")->result_array();
		$minumanl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Minuman' AND keterangan = 'Laris'")->result_array();
		$minumantl = $this->db->query("SELECT count(jenis_menu) FROM tbldataalter WHERE jenis_menu = 'Minuman' AND keterangan = 'Tidak Laris'")->result_array();
		$dataminuman = implode($minuman[0]);
		$dataminumanl = implode($minumanl[0]);
		$dataminumantl = implode($minumantl[0]);

		$jml1 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Lebih dari 20000'")->result_array();
		$jmll1 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Lebih dari 20000' AND keterangan = 'Laris'")->result_array();
		$jmltl1 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Lebih dari 20000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml1 = implode($jml1[0]);
		$datajmll1 = implode($jmll1[0]);
		$datajmltl1 = implode($jmltl1[0]);

		$jml2 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '15000 - 20000'")->result_array();
		$jmll2 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '15000 - 20000' AND keterangan = 'Laris'")->result_array();
		$jmltl2 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '15000 - 20000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml2 = implode($jml2[0]);
		$datajmll2 = implode($jmll2[0]);
		$datajmltl2 = implode($jmltl2[0]);

		$jml3 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '10000 - 14999'")->result_array();
		$jmll3 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '10000 - 14999' AND keterangan = 'Laris'")->result_array();
		$jmltl3 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = '10000 - 14999' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml3 = implode($jml3[0]);
		$datajmll3 = implode($jmll3[0]);
		$datajmltl3 = implode($jmltl3[0]);

		$jml4 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Kurang dari 10000'")->result_array();
		$jmll4 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Kurang dari 10000' AND keterangan = 'Laris'")->result_array();
		$jmltl4 = $this->db->query("SELECT count(harga) FROM tbldataalter WHERE harga = 'Kurang dari 10000' AND keterangan = 'Tidak Laris'")->result_array();
		$datajml4 = implode($jml4[0]);
		$datajmll4 = implode($jmll4[0]);
		$datajmltl4 = implode($jmltl4[0]);

		$t1 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Lebih dari 100'")->result_array();
		$tl1 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Lebih dari 100' AND keterangan = 'Laris'")->result_array();
		$ttl1 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Lebih dari 100' AND keterangan = 'Tidak Laris'")->result_array();
		$datat1 = implode($t1[0]);
		$datatl1 = implode($tl1[0]);
		$datattl1 = implode($ttl1[0]);

		$t2 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = '50 - 100'")->result_array();
		$tl2 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = '50 - 100' AND keterangan = 'Laris'")->result_array();
		$ttl2 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = '50 - 100' AND keterangan = 'Tidak Laris'")->result_array();
		$datat2 = implode($t2[0]);
		$datatl2 = implode($tl2[0]);
		$datattl2 = implode($ttl2[0]);

		$t3 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Kurang dari 50'")->result_array();
		$tl3 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Kurang dari 50' AND keterangan = 'Laris'")->result_array();
		$ttl3 = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE terjual = 'Kurang dari 50' AND keterangan = 'Tidak Laris'")->result_array();
		$datat3 = implode($t3[0]);
		$datatl3 = implode($tl3[0]);
		$datattl3 = implode($ttl3[0]);

		$total = $this->db->query("SELECT count(no_alternatif) FROM tbldataalter ")->result_array();
		$l = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE keterangan = 'Laris'")->result_array();
		$tl = $this->db->query("SELECT count(terjual) FROM tbldataalter WHERE keterangan = 'Tidak Laris'")->result_array();
		$datatotal = implode($total[0]);
		$totall = implode($l[0]);
		$totaltl = implode($tl[0]);

		$jml_data  = ["$datatotal", "$datamakanan", "$dataminuman", "$datajml1", "$datajml2", "$datajml3", "$datajml4", "$datat1", "$datat2", "$datat3"];
		$jml_l     = ["$totall", "$datamakananl", "$dataminumanl", "$datajmll1", "$datajmll2", "$datajmll3", "$datajmll4", "$datatl1", "$datatl2", "$datatl3"];
		$jml_tl    = ["$totaltl", "$datamakanantl", "$dataminumantl", "$datajmltl1", "$datajmltl2", "$datajmltl3", "$datajmltl4", "$datattl1", "$datattl2", "$datattl3"];
		$data_node = $this->db->query("SELECT * FROM node");

		$i = 0;
		foreach ($data_node->result() as $key => $node) {
			$this->db->query("INSERT INTO node3 (atribut,jumlah_data,laris,tidak_laris) VALUES ('$node->atribut','$jml_data[$i]', '$jml_l[$i]',  '$jml_tl[$i]')");
			$i++;
		}
		if ($dtgain == 'Jenis Menu') {
			$this->db->query("DELETE FROM node3 WHERE atribut = 'Makanan' OR atribut = 'Minuman' ");
		} elseif ($dtgain == 'Harga') {
			$this->db->query("DELETE FROM node3 WHERE atribut = 'Lebih dari 20000' OR atribut = '15000 - 20000' OR atribut = '10000 - 14999' OR atribut = 'Kurang dari 10000' ");
		} else {
			$this->db->query("DELETE FROM node3 WHERE atribut = 'Lebih dari 100' OR atribut = '50 - 100' OR atribut = 'Kurang dari 50' ");
		}

		if ($dtgain2 == 'Jenis Menu' || $dtgain == 'Jenis Menu') {
			$this->db->query("DELETE FROM node3 WHERE atribut = 'Makanan' OR atribut = 'Minuman' ");
		} elseif ($dtgain2 == 'Harga' || $dtgain == 'Harga') {
			$this->db->query("DELETE FROM node3 WHERE atribut = 'Lebih dari 20000' OR atribut = '15000 - 20000' OR atribut = '10000 - 14999' OR atribut = 'Kurang dari 10000' ");
		} else {
			$this->db->query("DELETE FROM node3 WHERE atribut = 'Lebih dari 100' OR atribut = '50 - 100' OR atribut = 'Kurang dari 50' ");
		}

		$data_node2 = $this->db->query("SELECT * FROM node3");
		// enthropi
		foreach ($data_node2->result() as $key => $node) {
			if ($node->laris == 0) {
				$enthropy = 0 + ((-$node->tidak_laris / $node->jumlah_data) * (log((-$node->tidak_laris) / $node->jumlah_data, 2)));
			} elseif ($node->tidak_laris == 0) {
				$enthropy = ((-$node->laris / $node->jumlah_data) * (log($node->laris / $node->jumlah_data, 2))) + 0;
			} elseif ($node->jumlah_data == 0) {
				$enthropy = 0;
			} elseif ($node->laris != 0 || $node->tidak_laris != 0 || $node->jumlah_data != 0) {
				$enthropy = ((-$node->laris / $node->jumlah_data) * (log($node->laris / $node->jumlah_data, 2))) + (((-$node->tidak_laris) / $node->jumlah_data) * (log($node->tidak_laris / $node->jumlah_data, 2)));
			}

			$this->db->query("UPDATE node3  SET entrophy = $enthropy WHERE atribut = '$node->atribut'");
		}

		$jd3 = $this->db->query("SELECT * FROM node3 WHERE atribut = 'total'")->result_array();
		$jumlahdata = $jd3[0]['jumlah_data'];
		$data_node3 = $this->db->query("SELECT * FROM node3");
		//gain
		foreach ($data_node3->result() as $key => $node3) {

			if ($node3->atribut == 'Total') {
				$gain = 0;
			} else {
				$gain = ($node3->jumlah_data / $jumlahdata) * $node3->entrophy;
			}
			$hasilgain3[] = $gain;
			unset($gain);
		}
		$batas = $this->db->query("SELECT atribut FROM tblnilaigain ORDER BY gain2 ASC LIMIT 2")->result_array();
		$gain2max = implode($batas[1]);

		$ent3 = $jd3[0]['entrophy'];

		if ($gain2max == 'Terjual') {
			$terjual2 = $ent3 - ($hasilgain3[7] + $hasilgain3[8] + $hasilgain3[9]);
			$this->db->query("UPDATE tblnilaigain  SET gain3 = $terjual2 WHERE atribut = 'Terjual'");
		} elseif ($gain2max == 'Harga') {
			$harga2 = $ent3 - ($hasilgain3[3] + $hasilgain3[4] + $hasilgain3[5] + $hasilgain3[6]);
			$this->db->query("UPDATE tblnilaigain  SET gain3 = $harga2 WHERE atribut = 'Harga'");
		} elseif ($gain2max == 'Jenis Menu') {
			$jmldata2 = $ent3 - ($hasilgain3[1] + $hasilgain3[2]);
			$this->db->query("UPDATE tblnilaigain  SET gain3 = $jmldata2 WHERE atribut = 'Jenis Menu'");
		}

		$data['tblDataalternatif'] = $this->Modelalternatif->getAllData();
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

	function addNewData()
	{
		$post = $this->input->post(null, TRUE);
		$sj = $post['no_alternatif'];
		$dj = $this->db->query("SELECT no_alternatif FROM tbldataalternatif WHERE no_alternatif = '$sj'")->result_array();

		if ($dj != NULL) {
			$dji = implode($dj[0]);
		} else {
			$dji = 'kosong';
		}

		if ($post['no_alternatif'] == $dji) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Sudah Ada!</div>');
			redirect('Dataalternatif');
		} else {
			$this->Modelalternatif->saveDataAlternative($post);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
			redirect('Dataalternatif');
		}
	}

	public function updateData()
	{
		$post = $this->input->post(null, TRUE);
		$this->Modelalternatif->updtoDB($post);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');

		redirect("Dataalternatif");
	}

	function removeData($no_alternatif)
	{
		$data = array('no_alternatif' => $no_alternatif);
		var_dump($no_alternatif);

		$this->Modelalternatif->delfromDB('tblDataalternatif', $data);
		$this->Modelalternatif->delfromDB('tbldatauji', $data);
		$this->db->query('DELETE FROM tbldatauji_konver WHERE no_alternatif = ' . $no_alternatif . '');
		$this->db->query('DELETE FROM tbldatauji_konver_bobot WHERE no_alternatif = ' . $no_alternatif . '');
		$this->db->query('DELETE FROM tblranking WHERE no_alternatif = ' . $no_alternatif . '');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');

		redirect('Dataalternatif');
	}
}
