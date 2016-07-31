<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends CI_Controller {
	function __construct() {
		parent::__construct();
		 //$this->load->model('agenda_model');
		 $this->load->model('web_model');
	}
	
	//Laporan Surat Masuk
	public function agenda_surat_masuk() {
		$a['page']	= "agenda/f_agenda_surat";
		$this->load->view('admin/index', $a);
	} 
	public function agenda_surat_keluar() {
		$a['page']	= "agenda/f_agenda_surat";
		$this->load->view('admin/index', $a);
	} 
	
	public function surat_cetak() {
		$jenis_surat	= $this->input->post('tipe');
		$tgl_start		= $this->input->post('tgl_start');
		$tgl_end		= $this->input->post('tgl_end');
		
		$a['tgl_start']	= $tgl_start;
		$a['tgl_end']	= $tgl_end;

		$a['data']	= $this->db->query("SELECT * FROM surat_masuk WHERE tgl_diterima >= '$tgl_start' AND tgl_diterima <= '$tgl_end' ORDER BY id_surat_masuk")->result();
//		$a['page']	= "agenda/surat_masuk_cetak";
		$this->load->view('admin/agenda/surat_masuk_cetak', $a);
	}
}
