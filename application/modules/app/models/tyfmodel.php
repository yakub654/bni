<?php 

class tyfmodel extends CI_Model{

	public function tyfcbAdd($usr_id)
	{
		date_default_timezone_set("Asia/Calcutta"); // date and time
		$date = date("Y-m-d"); 
		$date = date("Y-m-d",strtotime($this->input->post('date'))); 
		$datestat = date("Y-m-d H-i-s");
		$tyfcbData = array(

			'tyfcb_date'        => $date,
			'tyfcb_amt'         => $this->input->post('Amount'),
			'tyfcb_remark'      => $this->input->post('remark'),
			'tyfusr_id'         => $this->input->post('user'),
			'tyfstatus'         => '1',
			'tyfcrtd_by'        => $usr_id,
			'tyfcrtd_on'        => $datestat,
 
	    );
	    $this->db->insert('tyfcb',$tyfcbData);
	    $userId = $this->db->insert_id();

	    return $userId;
	}

	public function gettyf()
	{
		$sql = "Select *,(Select users.usr_name from users where tyfcb.tyfusr_id = users.usr_id) user_name From tyfcb where tyfstatus = 1 ";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result; 
	}

	public function tyfEdit($id)
	{
		$amount = $this->input->post('Amount');
		$remark = $this->input->post('remark');
		date_default_timezone_set("Asia/Calcutta"); // date and time
		$date = date("Y-m-d",strtotime($this->input->post('date')));
		$sql ="Update tyfcb Set tyfcb_amt = '".$amount."' , tyfcb_remark = '".$remark."' , tyfcb_date = '".$date."'  Where tyfusr_id = ".$id."";
		$query = $this->db->query($sql);

		
	}

	public function tyfDelete($id)
	{
		$sql = "Update tyfcb Set tyfstatus = 0 Where tyfusr_id = ".$id."";
		$query = $this->db->query($sql);
		if(!empty($query))
		{
			return true;
	    }
	}

}	