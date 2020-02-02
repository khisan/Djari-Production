<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_kategori');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Home"));
		}
	}

	public function index() {
		$x['data'] = $this->M_kategori->get_all_kategori();
		$this->load->view('Backend/v_kategori',$x);
	}

	function save(){
		$nama_kategori = strip_tags(htmlspecialchars($this->input->post('nama_kategori',TRUE),ENT_QUOTES));
		$this->M_kategori->tambah_kategori($nama_kategori);
		$this->session->set_flashdata('msg','success');
		redirect('Backend/kategori');
	}

	function edit(){
		$id		 = $this->input->post('kode',TRUE);
		$nama_kategori 	 = strip_tags(htmlspecialchars($this->input->post('nama_kategori_2',TRUE),ENT_QUOTES));
		$this->M_kategori->edit_kategori($id,$nama_kategori);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/kategori');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->M_kategori->hapus_kategori($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('Backend/kategori');
	}
}
