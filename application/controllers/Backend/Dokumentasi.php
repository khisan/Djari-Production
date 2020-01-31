<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_dokumentasi');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index() {
		$x['data'] = $this->M_dokumentasi->get_all_dokumentasi();
		$this->load->view('Backend/v_dokumentasi',$x);
	}

	function save(){
		$gambar = strip_tags(htmlspecialchars($this->input->post('gambar',TRUE),ENT_QUOTES));
		$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan',TRUE),ENT_QUOTES));
		$this->M_dokumentasi->tambah_dokumentasi($nama_dokumentasi);
		$this->session->set_flashdata('msg','success');
		redirect('Backend/dokumentasi');
	}

	function edit(){
		$id		 = $this->input->post('kode',TRUE);
		$gambar 	 = strip_tags(htmlspecialchars($this->input->post('gambar_2',TRUE),ENT_QUOTES));
		$keterangan 	 = strip_tags(htmlspecialchars($this->input->post('keterangan_2',TRUE),ENT_QUOTES));
		$this->M_dokumentasi->edit_dokumentasi($id,$gambar,$keterangan);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/dokumentasi');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->M_dokumentasi->hapus_dokumentasi($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('Backend/dokumentasi');
	}
}
