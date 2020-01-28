<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	public function index() {
		$this->load->view('Backend/v_index');
	}

}
