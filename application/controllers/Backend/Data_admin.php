<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');

    if ($this->session->userdata('status') != "login") {
      redirect(base_url("Home"));
    }
  }

  public function index()
  {
    $x['data'] = $this->M_user->get_all_user();
    $this->load->view('Backend/v_data_admin', $x);
  }
}
