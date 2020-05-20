<?php
class M_client extends CI_Model{

	function get_all_client(){
		$result = $this->db->get('tb_client');
		return $result; 
	}

	function tambah_client($nama_client, $alamat,$nama_product){
		$data = array(
	        'nama_client' => $nama_client,
	        'alamat' => $alamat,
	        'nama_product' => $nama_product
		);
		$this->db->insert('tb_client', $data);
	}

	function edit_client($id,$nama_client, $alamat,$nama_product){
		$data = array(
	        'nama_client' => $nama_client,
	        'alamat' => $alamat,
	        'nama_product' => $nama_product
		);
		$this->db->where('id_client', $id);
		$this->db->update('tb_client', $data);
	}

	function hapus_client($id){
		$this->db->where('id_client', $id);
		$this->db->delete('tb_client');
	}
}