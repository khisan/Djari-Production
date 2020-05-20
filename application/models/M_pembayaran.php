<?php
class M_pembayaran extends CI_Model{

	function get_all_pembayaran(){
		$this->db->join('tb_client', 'tb_client.id_client = tb_pembayaran.id_client');
		return $result=$this->db->get("tb_pembayaran");
	}

	function tambah_pembayaran($nama_client, $nominal,$keterangan){
		$data = array(
	        'id_client' => $nama_client,
	        'nominal' => $nominal,
	        'keterangan' => $keterangan
		);
		$this->db->insert('tb_pembayaran', $data);
	}

	function edit_pembayaran($id,$nama_client, $nominal,$keterangan){
		$data = array(
	        'id_client' => $nama_client,
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