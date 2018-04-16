<?php 

class tyfmodel extends CI_Model{

	public function tyfcbAdd($usr_id)
	{
		date_default_timezone_set("Asia/Calcutta"); // date and time
		$date = date("Y-m-d"); 
		$datestat = date("Y-m-d H-i-s");
		$tyfcbData = array(

			'tyfcb_date' => $date,
			'tyfcb_amt'  => $this->input->post('Amount'),
			'tyfcb_remark' => $this->input->post('remark'),
			'usr_id' => $this->input->post('user'),
			'tyfstatus' => '1',
			'tyfcrtd_by' => $usr_id,
			'tyfcrtd_on' => $datestat,
 
	    );
	    $this->db->insert('tyfcb',$tyfcbData);
	    $userId = $this->db->insert_id();

	    return $userId;
	}

	public function gettyf()
	{
		$sql = "Select * From tyfcb";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result; 
	}
}	