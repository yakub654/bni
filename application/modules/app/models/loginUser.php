<?php 

class loginUser extends CI_Model{

	public function isAuth($email)
	{
		$sql = "Select * from users Where usr_email='".$email."' and usr_status = 1";
		$query = $this->db->query($sql);
		$row = $query->row();
		return $row;
	}

	public function getUserForget($email)
	  {
	  	$sql = "Select usr_id from users where  usr_email = '".$email."'";
  	    $query = $this->db->query($sql);
		$row = $query->row();
		return $row;
	  }

	  public function addForget($data)
	  {

	  	$forgetdata  = array(

	  		'usr_fgpref_id' => $data['email']->usr_id,
	  		'usr_fgpref_value' => $data['string'], 
	  	);
	  	$this->db->insert('usr_forget_password',$forgetdata);
	  	$userId = $this->db->insert_id();
	  	return $userId;
	  }

	  public function linkTime($id)
	  {
	  	    
	  		$sql = "Select usr_fgpref_id from usr_forget_password where  usr_fgpref_value = '".$id."' and TIMEDIFF(CURTIME(),time(usr_fgp_time)) < '23:59:00' and DATEDIFF(CURDATE(),date(usr_fgp_time)) < '1' ";
	  		$query = $this->db->query($sql);
	  		$row = $query->row();
	  		return $row;
	  }

	  public function changePass($check)
	  {
	  		$changeData = array(

	  			'usr_password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT)
	  		);
	  		
	  	$this->db->set($changeData);
		$this->db->where('usr_id',$check['user']->usr_fgpref_id);
		$check = $this->db->update('users');

		return true;

	  }
}