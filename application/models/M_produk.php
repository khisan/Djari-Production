<?php
class M_produk extends CI_Model{

	function get_all_produk(){
		$result = $this->db->get('tb_product');
		return $result; 
	}

	function tambah_produk($nama_product, $harga,$keterangan){
		$data = array(
	        'nama_product' => $nama_product,
	        'harga' => $harga,
	        'keterangan' => $keterangan
		);
		$this->db->insert('tb_product', $data);
	}

	function edit_produk($id,$nama_product, $harga,$keterangan){
		$data = array(
	        'nama_product' => $nama_product,
	        'harga' => $harga,
	        'keterangan' => $keterangan
		);
		$this->db->where('id_product', $id);
		$this->db->update('tb_product', $data);
	}

	function hapus_produk($id){
		$this->db->where('id_product', $id);
		$this->db->delete('tb_product');
	}
}