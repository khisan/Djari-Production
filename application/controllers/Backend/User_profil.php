<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_profil extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') != "login") {
      redirect(base_url("Home"));
    }
    $this->load->model('M_user');
    $this->load->library('upload');
  }

  function index()
  {
    $id_user = $this->session->userdata('id_user');
    $data = $this->M_user->get_user_by_id($id_user)->row();
    $x['id_user'] = $data->id_user;
    $x['nama'] = $data->nama;
    $x['jabatan'] = $data->jabatan;
    $x['user_name'] = $data->username;
    $x['gambar'] = $data->gambar;
    $this->load->view('Backend/v_edit_profil_user', $x);
  }

  function update()
  {
    $id_user = htmlspecialchars($this->input->post('id_user', TRUE), ENT_QUOTES);
    $nama = htmlspecialchars($this->input->post('nama', TRUE), ENT_QUOTES);
    $jabatan = htmlspecialchars($this->input->post('jabatan', TRUE), ENT_QUOTES);
    $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);

    $config['upload_path'] = './assets/Backend/img/user/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);
    if (!empty($_FILES['gambar']['name'])) {
      if ($this->upload->do_upload('gambar')) {
        $data_gambar = $this->M_user->get_all_user()->row_array();
        $gambar = $this->M_user->get_user_by_id($data_gambar['id_user'])->row();
        if ($gambar->gambar != null) {
          $target_file = './assets/Backend/img/user/' . $gambar->gambar;
          unlink($target_file);
        }
        $foto = $this->upload->data();
        $bg_foto = $foto['file_name'];
      }
      $this->M_user->update_user($id_user, $nama, $jabatan, $username, $bg_foto);
      $this->session->set_flashdata('msg', 'success');
      redirect('Backend/user_profil');
    } else {
      $this->M_user->update_user_noimg($id_user, $nama, $jabatan, $username);
      $this->session->set_flashdata('msg', 'failed');
      redirect('Backend/user_profil');
    }
  }
}
