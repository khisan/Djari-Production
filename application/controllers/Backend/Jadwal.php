<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jadwal');
		$this->load->model('M_client');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Home"));
		}
	}

	public function index() {
		$x['data'] = $this->M_jadwal->get_all_jadwal();
		$x['client'] = $this->M_client->get_all_client();
		$this->load->view('Backend/v_jadwal',$x);
	}

	public function drop_alamat(){
    $id_client = $this->input->post('id_client');    
    $alamat = $this->M_client->dropdown_alamat($id_client);
    $lists = "";
    foreach($alamat->result() as $data){
       $lists .= $data->alamat; 
    }
    $callback = array('list_alamat'=>$lists); 
    echo json_encode($callback); 
	}

	function save(){
		$nama_client = strip_tags(htmlspecialchars($this->input->post('nama_client',TRUE),ENT_QUOTES));
		$alamat = $this->input->post('alamat');
		$tanggal = strip_tags(htmlspecialchars($this->input->post('tanggal',TRUE),ENT_QUOTES));
		$this->M_jadwal->tambah_jadwal($nama_client,$alamat,$tanggal);
		$this->session->set_flashdata('msg','success');
		redirect('Backend/Jadwal');
	}

	function edit(){
		$id		 = $this->input->post('id',TRUE);
		$tanggal 	 = strip_tags(htmlspecialchars($this->input->post('tanggal_2',TRUE),ENT_QUOTES));
		$this->M_jadwal->edit_jadwal($id,$tanggal);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/Jadwal');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->M_jadwal->hapus_jadwal($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('Backend/Jadwal');
	}

	function done(){
		$id		 = $this->input->post('id',TRUE);
		$id_jadwal		 = $this->input->post('id_3',TRUE);
		$nama_client 	 = strip_tags(htmlspecialchars($this->input->post('nama_client_3',TRUE),ENT_QUOTES));
		$tanggal 	 = strip_tags(htmlspecialchars($this->input->post('tanggal_3',TRUE),ENT_QUOTES));
		$this->M_jadwal->done_jadwal($id, $id_jadwal, $nama_client, $tanggal);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/Jadwal_selesai');

    }
	}
