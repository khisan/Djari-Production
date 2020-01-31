<?php
class M_user extends CI_Model{

	function get_all_user(){
		$result = $this->db->get('tb_user');
		return $result; 
	}

	function get_user_by_id($id_user){
		$result = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
		return $result;
	}

}