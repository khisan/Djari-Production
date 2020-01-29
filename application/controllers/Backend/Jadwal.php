<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jadwal');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index() {
		$x['data'] = $this->M_jadwal->get_all_jadwal();
		$this->load->view('Backend/v_jadwal',$x);
	}

	function save(){
		$nama = strip_tags(htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES));
		$alamat = strip_tags(htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES));
		$tanggal = strip_tags(htmlspecialchars($this->input->post('tanggal',TRUE),ENT_QUOTES));
		$this->M_jadwal->tambah_jadwal($nama,$alamat,$tanggal);
		$this->session->set_flashdata('msg','success');
		redirect('Backend/Jadwal');
	}

	function edit(){
		$id		 = $this->input->post('kode',TRUE);
		$nama 	 = strip_tags(htmlspecialchars($this->input->post('nama_2',TRUE),ENT_QUOTES));
		$alamat 	 = strip_tags(htmlspecialchars($this->input->post('alamat_2',TRUE),ENT_QUOTES));
		$tanggal 	 = strip_tags(htmlspecialchars($this->input->post('tanggal_2',TRUE),ENT_QUOTES));
		$this->M_jadwal->edit_jadwal($id,$nama,$alamat,$tanggal);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/Jadwal');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->M_jadwal->hapus_jadwal($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('Backend/Jadwal');
	}

}
