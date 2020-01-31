<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }

	public function index()
	{
		$x['data'] = $this->M_user->get_all_user();
		$this->load->view('Frontend/templates/header.php');
		$this->load->view('Frontend/index.php',$x);
		$this->load->view('Frontend/templates/footer.php');
	}
}
