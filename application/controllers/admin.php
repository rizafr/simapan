<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('web_model');
	}
	
	public function index() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">Maaf Anda belum login. Silakan login terlebih dahulu</div>");
			redirect("logins/login");
		}
		
		$a['page']	= "beranda";
		$a['countSuratMasuk']	= $this->web_model->getCountSuratMasuk();
		$a['countSuratMasukSelesai']	= $this->web_model->getCountSuratMasukSelesai();
		$a['countSuratBelumDisposisi']	= $this->web_model->getCountSuratBelumDisposisi();
		$a['countSuratMasukNotReported']	= $this->web_model->getCountSuratMasukNotReported();
		$this->load->view('admin/index', $a);
	}

	
	
	
	
}
