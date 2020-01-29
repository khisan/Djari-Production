<?php
class M_jadwal_selesai extends CI_Model{

	function get_all_jadwal_selesai(){
		$result = $this->db->get('tb_jadwal_selesai');
		return $result; 
	}

	function hapus_jadwal_selesai($id){
		$this->db->where('id_jadwal_selesai', $id);
		$this->db->delete('tb_jadwal_selesai');
	}
}