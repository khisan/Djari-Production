<?php
class M_pembayaran extends CI_Model{

	function get_all_pembayaran(){
		$result = $this->db->get('tb_pembayaran');
		return $result; 
	}

	function tambah_pembayaran($nama_client, $nominal,$keterangan){
		$data = array(
	        'nama_client' => $nama_client,
	        'nominal' => $nominal,
	        'keterangan' => $keterangan
		);
		$this->db->insert('tb_pembayaran', $data);
	}

	function edit_pembayaran($id,$nama_client, $nominal,$keterangan){
		$data = array(
	        'nama_client' => $nama_client,
	        'nominal' => $nominal,
	        'keterangan' => $keterangan
		);
		$this->db->where('id_pembayaran', $id);
		$this->db->update('tb_pembayaran', $data);
	}

	function hapus_pembayaran($id){
		$this->db->where('id_pembayaran', $id);
		$this->db->delete('tb_pembayaran');
	}
}