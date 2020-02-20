<?php
class M_dokumentasi extends CI_Model{

	function get_all_dokumentasi(){
		// $result = $this->db->query("SELECT id_dokumentasi,nama_kategori,gambar,keterangan FROM tb_dokumentasi JOIN tb_kategori ON id_kategori=id_kategori");
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_dokumentasi.id_kategori');
		return $result=$this->db->get("tb_dokumentasi");
	}

	function filter($kategori)
  {
		$result = $this->db->query("SELECT tbl1.id_dokumentasi,tbl1.id_kategori,tbl2.nama_kategori,tbl1.gambar,tbl1.keterangan FROM tb_dokumentasi tbl1 JOIN tb_kategori tbl2 ON tbl1.id_kategori=tbl2.id_kategori WHERE nama_kategori='$kategori'");
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

	function edit_dokumentasi_with_img($id,$kategori,$gambar,$keterangan){
		$result = $this->db->query("UPDATE tb_dokumentasi SET id_kategori='$kategori',gambar='$gambar',keterangan='$keterangan' WHERE id_dokumentasi='$id'");
		return $result;
	}

	function edit_dokumentasi_no_img($id,$kategori,$keterangan){
		$result = $this->db->query("UPDATE tb_dokumentasi SET id_kategori='$kategori',keterangan='$keterangan' WHERE id_dokumentasi='$id'");
		return $result;
	}

	function hapus_dokumentasi($id){
		$this->db->where('id_dokumentasi', $id);
		$this->db->delete('tb_dokumentasi');
	}
}