<?php 

class loginUser extends CI_Model{

	public function isAuth($email)
	{
		$sql = "Select * from users Where usr_email='".$email."' and usr_status = 1";
		$query = $this->db->query($sql);
		$row = $query->row();
		return $row;
	}

}