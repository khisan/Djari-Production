<?php
class M_kategori extends CI_Model{

	function get_all_kategori(){
		$result = $this->db->get('tb_kategori');
		return $result; 
	}

	function tambah_kategori($nama_kategori){
		$data = array(
	        'nama_kategori' => $nama_kategori
		);
		$this->db->insert('tb_kategori', $data);
	}

	function edit_kategori($id,$nama_kategori){
		$data = array(
	        'nama_kategori' => $nama_kategori
		);
		$this->db->where('id_kategori', $id);
		$this->db->update('tb_kategori', $data);
	}

	function hapus_kategori($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('tb_kategori');
	}
}