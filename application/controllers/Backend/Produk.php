<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Home"));
		}
	}

	public function index()
	{
		$x['data'] = $this->M_produk->get_all_produk();
		$this->load->view('Backend/v_product', $x);
	}

	function save()
	{
		$nama_product = strip_tags(htmlspecialchars($this->input->post('nama_product', TRUE), ENT_QUOTES));
		$harga = strip_tags(htmlspecialchars($this->input->post('harga', TRUE), ENT_QUOTES));
		$harga_produk = str_replace(".", "", $harga);
		$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan', TRUE), ENT_QUOTES));
		$this->M_produk->tambah_produk($nama_product, $harga_produk, $keterangan);
		$this->session->set_flashdata('msg', 'success');
		redirect('Backend/produk');
	}

	function edit()
	{
		$id = $this->input->post('kode', TRUE);
		$nama_product = strip_tags(htmlspecialchars($this->input->post('nama_product_2', TRUE), ENT_QUOTES));
		$harga = strip_tags(htmlspecialchars($this->input->post('harga_2', TRUE), ENT_QUOTES));
		$harga_produk = str_replace(".", "", $harga);
		$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan_2', TRUE), ENT_QUOTES));
		$this->M_produk->edit_produk($id, $nama_product, $harga_produk, $keterangan);
		$this->session->set_flashdata('msg', 'info');
		redirect('Backend/produk');
	}

	function delete()
	{
		$id = $this->input->post('id', TRUE);
		$this->M_produk->hapus_produk($id);
		$this->session->set_flashdata('msg', 'success-delete');
		redirect('Backend/produk');
	}
}
