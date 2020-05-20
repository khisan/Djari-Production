<?php
defined('BASEPATH') or exit('No direct script access allowed');

class client extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_client');
		$this->load->model('M_produk');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Home"));
		}
	}

	public function index()
	{
		$x['data'] = $this->M_client->get_all_client();
		$x['produk'] = $this->M_produk->get_all_produk();
		$this->load->view('Backend/v_client', $x);
	}

	function save()
	{
		$nama_client = strip_tags(htmlspecialchars($this->input->post('nama_client', TRUE), ENT_QUOTES));
		$alamat = strip_tags(htmlspecialchars($this->input->post('alamat', TRUE), ENT_QUOTES));
		$id_product = strip_tags(htmlspecialchars($this->input->post('id_product', TRUE), ENT_QUOTES));
		$this->M_client->tambah_client($nama_client, $alamat, $id_product);
		$this->session->set_flashdata('msg', 'success');
		redirect('Backend/client');
	}

	function edit()
	{
		$id = $this->input->post('kode', TRUE);
		$nama_client = strip_tags(htmlspecialchars($this->input->post('nama_client_2', TRUE), ENT_QUOTES));
		$alamat = strip_tags(htmlspecialchars($this->input->post('alamat_2', TRUE), ENT_QUOTES));
		$id_product = strip_tags(htmlspecialchars($this->input->post('id_product_2', TRUE), ENT_QUOTES));
		$this->M_client->edit_client($id, $nama_client, $alamat, $id_product);
		$this->session->set_flashdata('msg', 'info');
		redirect('Backend/client');
	}

	function delete()
	{
		$id = $this->input->post('id', TRUE);
		$this->M_client->hapus_client($id);
		$this->session->set_flashdata('msg', 'success-delete');
		redirect('Backend/client');
	}
}
