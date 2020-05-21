<?php
class M_jadwal_selesai extends CI_Model{

	function get_all_jadwal_selesai(){
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_jadwal_selesai.id_jadwal');
		return $result=$this->db->get("tb_jadwal_selesai"); 
	}

	function hapus_jadwal_selesai($id){
		$this->db->where('id_jadwal_selesai', $id);
		$this->db->delete('tb_jadwal_selesai');
	}
}