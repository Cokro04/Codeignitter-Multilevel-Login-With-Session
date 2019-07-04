<?php
class Login_model extends CI_Model{

  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
	$this->db->where('status',1);
    $result = $this->db->get('tbl_users',1);
    return $result;
  }

}
