<?php
class M_client extends CI_Model{

	function get_all_client(){
		$this->db->join('tb_product', 'tb_client.id_product = tb_product.id_product');
		return $result=$this->db->get("tb_client");
	}

	function dropdown_alamat($id_client){
		$this->db->where('id_client', $id_client);
    return $result=$this->db->get("tb_client");
	}

	function tambah_client($nama_client, $alamat,$id_product){
		$data = array(
	        'nama_client' => $nama_client,
	        'alamat' => $alamat,
	        'id_product' => $id_product
		);
		$this->db->insert('tb_client', $data);
	}

	function edit_client($id,$nama_client, $alamat,$id_product){
		$data = array(
	        'nama_client' => $nama_client,
	        'alamat' => $alamat,
	        'id_product' => $id_product
		);
		$this->db->where('id_client', $id);
		$this->db->update('tb_client', $data);
	}

	function hapus_client($id){
		$this->db->where('id_client', $id);
		$this->db->delete('tb_client');
	}
}