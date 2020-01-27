<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index() {
		$this->load->view('Backend/v_jadwal');
	}

}
