<?php
class M_produk extends CI_Model{

	function get_all_produk(){
		$result = $this->db->get('tb_produk');
		return $result; 
	}

	function tambah_produk($nama_client, $nominal,$keterangan){
		$data = array(
	        'nama_client' => $nama_client,
	        'nominal' => $nominal,
	        'keterangan' => $keterangan
		);
		$this->db->insert('tb_produk', $data);
	}

	function edit_produk($id,$nama_client, $nominal,$keterangan){
		$data = array(
	        'nama_client' => $nama_client,
	        'nominal' => $nominal,
	        'keterangan' => $keterangan
		);
		$this->db->where('id_produk', $id);
		$this->db->update('tb_produk', $data);
	}

	function hapus_produk($id){
		$this->db->where('id_produk', $id);
		$this->db->delete('tb_produk');
	}
}