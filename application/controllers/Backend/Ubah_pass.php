<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_pass extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') != "login") {
      redirect(base_url("Login"));
    }
    $this->load->model('M_ubah_pass');
  }

  function index()
  {
    $this->load->view('Backend/v_ubah_pass');
  }

  function ubah()
  {
    $id_user = $this->session->userdata('id_user');
    if (!empty($id_user)) {
      $password_lama = htmlspecialchars($this->input->post('password_lama', TRUE), ENT_QUOTES);
      $password_baru = htmlspecialchars($this->input->post('password_baru', TRUE), ENT_QUOTES);
      $konfir_password = htmlspecialchars($this->input->post('konfir_password', TRUE), ENT_QUOTES);
      $pass_lama = md5($password_lama);
      $pass_baru = md5($password_baru);
      $check_password_lama = $this->M_ubah_pass->check_password_lama($id_user, $pass_lama);
      if ($check_password_lama->num_rows() > 0) {
        if ($password_baru == $konfir_password) {
          $this->M_ubah_pass->ubah_password($id_user, $pass_baru);
          $this->session->set_flashdata('msg', 'success');
          redirect('backend/ubah_pass');
        } else {
          $this->session->set_flashdata('msg', 'error-notmatch');
          redirect('backend/ubah_pass');
        }
      } else {
        $this->session->set_flashdata('msg', 'error-notfound');
        redirect('backend/ubah_pass');
      }
    } else {
      $this->session->set_flashdata('msg', 'error');
      redirect('backend/ubah_pass');
    }
  }
}
