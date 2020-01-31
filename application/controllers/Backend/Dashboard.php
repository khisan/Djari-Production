<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jadwal');
		$this->load->model('M_jadwal_selesai');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	public function index() {
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')], ['gambar' => $this->session->userdata('gambar')])->row_array();
		$data = array(
			'data'  => $this->db->from("tb_jadwal")->count_all_results(),
			'data2' => $this->db->from("tb_jadwal_selesai")->count_all_results()
		 );
		$this->load->view('Backend/v_index',$data);
	}

}
