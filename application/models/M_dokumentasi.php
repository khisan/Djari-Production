<?php
class M_dokumentasi extends CI_Model{

	function get_all_dokumentasi(){
		$result = $this->db->get('tb_dokumentasi');
		return $result; 
	}

	function tambah_dokumentasi($id_kategori,$gambar,$keterangan){
		$data = array(
					'id_kategori' => $id_kategori,
	        'gambar' => $gambar,
	        'keterangan' => $keterangan
		);
		$this->db->insert('tb_dokumentasi', $data);
	}

	function edit_dokumentasi($id,$id_kategori,$gambar,$keterangan){
		$data = array(
	        'id_kategori' => $id_kategori,
	        'gambar' => $gambar,
	        'keterangan' => $keterangan
		);
		$this->db->where('id_dokumentasi', $id);
		$this->db->update('tb_dokumentasi', $data);
	}

	function hapus_dokumentasi($id){
		$this->db->where('id_dokumentasi', $id);
		$this->db->delete('tb_dokumentasi');
	}
}