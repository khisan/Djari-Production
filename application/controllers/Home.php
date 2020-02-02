<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
      parent::__construct();
      $this->load->model('M_user');
      $this->load->model('M_kategori');
			$this->load->model('M_dokumentasi');
    }

	public function index()
	{
		$x['user'] = $this->M_user->get_all_user();
		$x['kategori'] = $this->M_kategori->get_all_kategori();
		$x['dokumentasi'] = $this->M_dokumentasi->get_all_dokumentasi();
		$this->load->view('Frontend/templates/header.php');
		$this->load->view('Frontend/index.php',$x);
		$this->load->view('Frontend/templates/footer.php');
	}
}
