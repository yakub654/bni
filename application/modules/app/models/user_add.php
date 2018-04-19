<?php 

class user_add extends CI_Model{

	  public function user_reg($data)  // user register
	  {
	  		date_default_timezone_set("Asia/Calcutta"); // date and time
		    $date = date("Y-m-d H-i-s"); 	
	  		$userData = array(

		  		'usr_name'           => $this->input->post('name'),
		  		'usr_companyName'    => $this->input->post('cmp_name'),
		  		'usr_category'       => $this->input->post('category'),
		  		'usr_tagline'        => $this->input->post('tg_line'),
		  		'usr_mobile'         => $this->input->post('mob_no'),
		  		'usr_email'          => $this->input->post('email'),
		  		'usr_website'        => $this->input->post('website'),
		  		'usr_address'        => $this->input->post('address'),
		  		'usr_logo'           => $data['lgimg_name'],
		  		'usr_profilePic'     => $data['prfimg_name'],
		  		'usr_password'       => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
		  		'usr_status'         => '1',
		  		'usr_crtd_by'        => $data['session_id'],
		  		'usr_crtd_on'		 => $date,
		  		
	  		);


	  		// $sql = "Insert into users VALUES ('".$name."','".$companyName."','".$category."','".$tagline."','".$mobile."','".$email."','".$website."','".$address."','".$lgimg_name."','".$prfimg_name."','".$password."')";
	  		// $query = $this->db->query($sql);
	  		$this->db->insert('users',$userData);
	  		$userId = $this->db->insert_id();

	  		if($data['email_data'])
	  		{
	  			foreach ($data['email_data'] as $key)
				{
					$sql = "Insert into user_email(usr_eml, usr_id) VALUES ('".$key->emailAdd."','".$userId."')";
					$query = $this->db->query($sql);
				}
	  		}
	  		if($data['mobile_data'])
	  		{
	  			foreach ($data['mobile_data'] as $key)
				{
					$sql = "Insert into user_mobile(usr_mbl, usr_id) VALUES ('".$key->mobileAdd."','".$userId."')";
					$query = $this->db->query($sql);
				}
	  		}
	  		return $userId;

	  }

	  public function validate_Email($value)
	  {
			$sql = "Select usr_email from users Where usr_email='".$value."'";
			$query = $this->db->query($sql);
			$row = $query->row();
			return $row;
	  }

	  public function getUser($usr_id)
	  {

	  	    $sql = "Select usr_name,usr_id from users where NOT usr_id = ".$usr_id."";
	  	    $query = $this->db->query($sql);
			$result = $query->result();
			return $result;

	  }

	  public function displayUser($usr_id)
	  {
	  	$sql = "Select * from users where usr_status = 1 and Not usr_id = ".$usr_id."";
	  	$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	  }

	  public function userDelete($id)
	  {
	  	$sql = "Update users Set usr_status = 0 Where usr_id = ".$id."";
		$query = $this->db->query($sql);
		if(!empty($query))
		{
			return true;
	    }
	  }

	  
	 
}