<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tyfcb extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('form', 'url'));
		$this->load->model('tyfmodel');
    $this->load->model('user_add');

		
	}
  
  	public function tyfcb_list()
  	{
  		$usr_id = $this->session->userdata('usr_id');
  		$data['users'] = $this->user_add->getUser($usr_id); //displaying users in tyfcb user model
      $data['tyf'] = $this->tyfmodel->gettyf();
  		$this->load->view('tyfcb-list',$data);
  	}

  	public function tyfcb_add()
  	{
  		
  	 //  $this->form_validation->set_rules('user', 'User', 'required');
  		// $this->form_validation->set_rules('amount', 'Amount', 'required|numeric');
  		// $this->form_validation->set_rules('remark', 'Remark', 'required');
  		// $this->form_validation->set_rules('date', 'Date', 'required');

  		// if($this->form_validation->run() == TRUE)
  		// {
  		// 	$usr_id = $this->session->userdata('usr_id'); 
  		// 	$result		= $this->tyfmodel->tyfcbAdd($usr_id);
  		// 	if(!empty($result))
  		// 	{
  		// 		$response  = array('success' => True , 'message' => 'successfull', 'linkn' => base_url().'app/tyfcb-list');
    //     	    echo json_encode($response);
  		// 	}
  		// 	else
  		// 	{
  		// 		$response  = array('success' => false, 'message' => '1', 'linkn' => base_url().'app/tyfcb-list');
    //     	    echo json_encode($response);
  		// 	}
  		// }
  		// else
  		// {
  		// 	$response  = array('success' => false, 'message' => '2');
    //     	    echo json_encode($response);

  		// }
  		   $usr_id = $this->session->userdata('usr_id');
  		   $result		= $this->tyfmodel->tyfcbAdd($usr_id);
  		   if(!empty($result))
  			{
  				$response  = array('success' => True , 'message' => 'successfull', 'linkn' => base_url().'app/tyfcb-list');
        	    echo json_encode($response);
  			}
  			else
  			{
  				$response  = array('success' => false, 'message' => '1', 'linkn' => base_url().'app/tyfcb-list');
        	    echo json_encode($response);
  			}
  	}

    
	
}