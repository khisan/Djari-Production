<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_selesai extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal_selesai');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Home"));
		}
	}

	public function index()
	{
		$x['data'] = $this->M_jadwal_selesai->get_all_jadwal_selesai();
		$this->load->view('Backend/v_jadwal_selesai', $x);
	}

	function delete()
	{
		$id = $this->input->post('id', TRUE);
		$this->M_jadwal_selesai->hapus_jadwal_selesai($id);
		$this->session->set_flashdata('msg', 'success-delete');
		redirect('Backend/Jadwal_selesai');
	}
}
