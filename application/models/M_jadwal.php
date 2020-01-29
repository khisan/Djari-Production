<?php
class M_jadwal extends CI_Model{

	function get_all_jadwal(){
		$result = $this->db->get('tb_jadwal');
		return $result; 
	}

	function tambah_jadwal($nama,$alamat,$tanggal){
		$data = array(
	        'nama' => $nama,
	        'alamat' => $alamat,
	        'tanggal' => $tanggal
		);
		$this->db->insert('tb_jadwal', $data);
	}

	function edit_jadwal($id,$nama,$alamat,$tanggal){
		$data = array(
	        'nama' => $nama,
	        'alamat' => $alamat,
	        'tanggal' => $tanggal
		);
		$this->db->where('id_jadwal', $id);
		$this->db->update('tb_jadwal', $data);
	}

	function hapus_jadwal($id){
		$this->db->where('id_jadwal', $id);
		$this->db->delete('tb_jadwal');
	}

	function done_jadwal(){
		// $data = array(
		// 			'id_jadwal' => $id,
	 //        'nama_jadwal_selesai' => $nama,
	 //        'alamat_jadwal_selesai' => $alamat,
	 //        'tanggal_jadwal_selesai' => $tanggal
		// );
		// $this->db->where('id_jadwal', $id);
		// $this->db->insert('tb_jadwal_selesai');
		$q = $this->db->get('tb_jadwal')->result(); 
		// get first table
    foreach($q as $r) { // loop over results
        $this->db->insert('tb_jadwal_selesai', $r); // insert each row to another table
    $this->hapus_jadwal($id);
    $this->session->set_flashdata('msg','info');
		redirect('Backend/Jadwal_selesai');
		}
	}
}