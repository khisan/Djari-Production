<?php
class M_ubah_pass extends CI_Model
{

  function check_password_lama($id_user, $pass_lama)
  {
    $this->db->where('id_user', $id_user);
    $this->db->where('password', $pass_lama);
    $query = $this->db->get('tb_user');
    return $query;
  }

  function ubah_password($id_user, $pass_baru)
  {
    $this->db->set('password', $pass_baru);
    $this->db->where('id_user', $id_user);
    $this->db->update('tb_user');
  }
}
