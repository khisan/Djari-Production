<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('Frontend/templates/header');
		$this->load->view('Frontend/index');
		$this->load->view('Frontend/templates/footer');
	}

}
