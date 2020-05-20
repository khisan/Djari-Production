<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pembayaran');
		$this->load->model('M_client');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Home"));
		}
	}

	public function index()
	{
		$x['data'] = $this->M_pembayaran->get_all_pembayaran();
		$x['client'] = $this->M_client->get_all_client();
		$this->load->view('Backend/v_pembayaran', $x);
	}

	function save()
	{
		$nama_client = strip_tags(htmlspecialchars($this->input->post('nama_client', TRUE), ENT_QUOTES));
		$nominal = strip_tags(htmlspecialchars($this->input->post('nominal', TRUE), ENT_QUOTES));
		$harga_nominal = str_replace(".", "", $nominal);
		$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan', TRUE), ENT_QUOTES));
		$this->M_pembayaran->tambah_pembayaran($nama_client, $harga_nominal, $keterangan);
		$this->session->set_flashdata('msg', 'success');
		redirect('Backend/pembayaran');
	}

	function edit()
	{
		$id = $this->input->post('kode', TRUE);
		$nama_client = strip_tags(htmlspecialchars($this->input->post('nama_client_2', TRUE), ENT_QUOTES));
		$nominal = strip_tags(htmlspecialchars($this->input->post('nominal_2', TRUE), ENT_QUOTES));
		$harga_nominal = str_replace(".", "", $nominal);
		$keterangan = strip_tags(htmlspecialchars($this->input->post('keterangan_2', TRUE), ENT_QUOTES));
		$this->M_pembayaran->edit_pembayaran($id, $nama_client, $harga_nominal, $keterangan);
		$this->session->set_flashdata('msg', 'info');
		redirect('Backend/pembayaran');
	}

	function delete()
	{
		$id = $this->input->post('id', TRUE);
		$this->M_pembayaran->hapus_pembayaran($id);
		$this->session->set_flashdata('msg', 'success-delete');
		redirect('Backend/pembayaran');
	}
}
