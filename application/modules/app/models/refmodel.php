<?php 

class refmodel extends CI_Model
{
	public function addRef($usr_id)
	{
		date_default_timezone_set("Asia/Calcutta"); // date and time
		$crtd_on = date("Y-m-d H-i-s");
		$date = date("Y-m-d",strtotime($this->input->post('date')));

		$refData = array(

			'ref_usr_id'           => $this->input->post('user'),
		    'ref_name'             => $this->input->post('refname'),
		  	'ref_email'            => $this->input->post('email'),
		  	'ref_mobile'           => $this->input->post('mobile'),
		  	'ref_remark'           => $this->input->post('remark'),
		  	'ref_date'             => $date,
		  	'ref_status'           => '1',
		  	'ref_crtd_by'          => $usr_id,	
		  	'ref_crtd_on'          => $crtd_on,
		);

		$this->db->insert('reference',$refData);
	  	$userId = $this->db->insert_id();
	  	return $userId;
	}

	public function getRefs($usr_id)
	{
		$sql = "Select *,(Select users.usr_name from users where reference.ref_usr_id= users.usr_id) user_name from reference where ref_status = 1 and Not ref_usr_id = ".$usr_id."";
	  	$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function deleteRef($id)
	{
		$sql = "Update reference Set ref_status = 0 Where ref_id = ".$id."";
		$query = $this->db->query($sql);
		if(!empty($query))
		{
			return true;
	    }
	}

	public function editRef($id)
	{
		$date = date("Y-m-d",strtotime($this->input->post('date')));
		$refData = array(

			'ref_name'             => $this->input->post('refname'),
		  	'ref_email'            => $this->input->post('email'),
		  	'ref_mobile'           => $this->input->post('mobile'),
		  	'ref_remark'           => $this->input->post('remark'),
		  	'ref_date'             => $date,

		);
		$this->db->set($refData);
		$this->db->where('ref_usr_id',$id);
		$check = $this->db->update('reference');
		if(!empty($check))
		{
			return true;
		}
	}
}