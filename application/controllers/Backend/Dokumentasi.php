<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dokumentasi');
		$this->load->model('M_kategori');
		$this->load->library('upload');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Home"));
		}
	}

	public function index()
	{
		$x['data'] = $this->M_dokumentasi->get_all_dokumentasi();
		$x['kategori'] = $this->M_kategori->get_all_kategori();
		$this->load->view('Backend/v_dokumentasi', $x);
	}

	function save()
	{
		$config['upload_path'] = './assets/Backend/img/dokumentasi/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$img = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/Backend/img/dokumentasi/' . $img['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '100%';
				$config['new_image'] = './assets/Backend/img/dokumentasi/' . $img['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$id_kategori = $this->input->post('kategori');
				$gambar = $img['file_name'];
				$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan', TRUE), ENT_QUOTES));
				$this->M_dokumentasi->tambah_dokumentasi($id_kategori, $gambar, $keterangan);
				$this->session->set_flashdata('msg', 'success');
				redirect('Backend/dokumentasi');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('Backend/dokumentasi');
			}
		}
	}

	function edit()
	{
		$config['upload_path'] = './assets/Backend/img/dokumentasi/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if (!empty($_FILES['filefoto_2']['name'])) {
			if ($this->upload->do_upload('filefoto_2')) {
				$img = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/Backend/img/dokumentasi/' . $img['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '100%';
				$config['new_image'] = './assets/Backend/img/dokumentasi/' . $img['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $img['file_name'];
				$id 	  = $this->input->post('kode', TRUE);
				$kategori	  = strip_tags(htmlspecialchars($this->input->post('kategori_2', TRUE), ENT_QUOTES));
				$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan_2', TRUE), ENT_QUOTES));

				$this->M_dokumentasi->edit_dokumentasi_with_img($id, $kategori, $gambar, $keterangan);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('Backend/Dokumentasi');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('Backend/Dokumentasi');
			}
		} else {
			$id 	  = $this->input->post('kode', TRUE);
			$kategori	  = strip_tags(htmlspecialchars($this->input->post('kategori_2', TRUE), ENT_QUOTES));
			$keterangan = $this->input->post('keterangan_2');

			$this->M_dokumentasi->edit_dokumentasi_no_img($id, $kategori, $keterangan);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('Backend/Dokumentasi');
		}
	}

	function delete()
	{
		$id = $this->input->post('id', TRUE);
		$this->M_dokumentasi->hapus_dokumentasi($id);
		$this->session->set_flashdata('msg', 'success-delete');
		redirect('Backend/dokumentasi');
	}
}
