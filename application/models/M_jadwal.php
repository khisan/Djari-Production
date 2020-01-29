<?php
class M_jadwal extends CI_Model{

	function get_all_jadwal(){
		$result = $this->db->get('tb_jadwal');
		return $result; 
	}

	function tambah_jadwal($nama,$alamat,$tanggal){
		$data = array(
	        'nama' => $nama,
	        'alamat' => $alamat,
	        'tanggal' => $tanggal
		);
		$this->db->insert('tb_jadwal', $data);
	}

	function edit_jadwal($id,$nama,$alamat,$tanggal){
		$data = array(
	        'nama' => $nama,
	        'alamat' => $alamat,
	        'tanggal' => $tanggal
		);
		$this->db->where('id_jadwal', $id);
		$this->db->update('tb_jadwal', $data);
	}

	function hapus_jadwal($id){
		$this->db->where('id_jadwal', $id);
		$this->db->delete('tb_jadwal');
	}


}