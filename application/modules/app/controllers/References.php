<?php

class References extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('form', 'url'));
		
	
	}

	public function refview()
	{
		$usr_id = $this->session->userdata('usr_id');
  		$data['users'] = $this->user_add->getUser($usr_id);
		$this->load->view('references',$data);
	}
}