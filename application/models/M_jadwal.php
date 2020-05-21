<?php
class M_jadwal extends CI_Model{

	function get_all_jadwal(){
		$this->db->join('tb_client', 'tb_client.id_client = tb_jadwal.id_client');
		return $result=$this->db->get("tb_jadwal"); 
	}

	function tambah_jadwal($nama_client,$alamat,$tanggal){
		$data = array(
	        'id_client' => $nama_client,
	        'alamat' => $alamat,
	        'tanggal' => $tanggal
		);
		$this->db->insert('tb_jadwal', $data);
	}

	function edit_jadwal($id,$nama_client,$alamat,$tanggal){
		$data = array(
	        'id_client' => $nama_client,
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

	function done_jadwal($id, $id_jadwal, $nama_client, $tanggal){
		$data = array(
			'id_jadwal' => $id_jadwal,
      'id_client' => $nama_client,
      'tanggal' => $tanggal
		);
		//$this->db->where('id_jadwal', $id);
		$this->db->insert('tb_jadwal_selesai', $data);
			// $this->db->where('id_jadwal',$id);
			// $query = $this->db->get('tb_jadwal')->result();
			// $q = $this->db->get('tb_jadwal');
			// $count_row = $q->num_rows();
			// // get first table
			// if ($count_row > 0) {
	  //     foreach($query as $r) { // loop over results
   //      $this->db->insert('tb_jadwal_selesai', $r); // insert each row to another table
	  //   	}
	  //   } else {
	 	// 		redirect('Backend/Jadwal_selesai');
   //  }
    $this->hapus_jadwal($id_jadwal);
    $this->session->set_flashdata('msg','info');
		redirect('Backend/Jadwal_selesai');
	}
}