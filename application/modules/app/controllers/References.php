<?php

class References extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('form', 'url'));
		$this->load->model('user_add');
		$this->load->model('refmodel');
	
	}

	public function refview()
	{
		
		if($this->session->userdata('usr_email')!='')
		{
			$usr_id = $this->session->userdata('usr_id');
	  		$data['users']  = $this->user_add->getUser($usr_id);
	  		$data['ref']    = $this->refmodel->getRefs($usr_id);

			$this->load->view('references',$data);
	    }
		else
		{
			redirect(site_url('app'));
		}
	}

	public function refAdd()
	{
		// server side validation start

		// server side validation start
		$usr_id = $this->session->userdata('usr_id');
		$userId  = $this->refmodel->addRef($usr_id);

		if($userId)
		{
			$response  = array('success' => True , 'message' => '', 'linkn' => base_url().'app/references');
    	    echo json_encode($response);
		}
		else
		{
			$response  = array('success' => false , 'message' => 'Something went wrong');
    	    echo json_encode($response);

		}
	}

	public function refdelete()
	{
		$id = $this->input->post('ref_id');
	    if($this->refmodel->deleteRef($id))
	    {
	       $response = array('success' => True, 'message'=>'', 'linkn'=>base_url().'app/references');
	       echo json_encode($response);
	    }
	}

	public function refEdit()
	{
		$check = $this->refmodel->editRef($this->input->post('id'));

		if(!empty($check))
		{
			$response  = array('success' => True , 'message' => '', 'linkn' => base_url().'app/references');
            echo json_encode($response);
		}
		else
		{
			$response  = array('success' => false , 'message' => 'Something went wrong');
            echo json_encode($response);
		}
        
	}

	public function transview()
	{

		
		if($this->session->userdata('usr_email')!='')
		{
			$data['refask'] = $this->refmodel->getAsk();
			$data['refgive'] = $this->refmodel->getGive();
			$this->load->view('transaction',$data);
		}
		else
		{
			redirect(site_url('app'));
		}
	}

	public function transform()
	{

		
		if($this->session->userdata('usr_email')!='')
		{
			$this->load->view('transadd');
		}
		else
		{
			redirect(site_url('app'));
		}
	}


	public function transadd()
	{
		// server side validation start 

		//server side validation end
		$usr_id = $this->session->userdata('usr_id');
		$userId = $this->refmodel->addTrans($usr_id);
		if(!empty($userId))
		{
			$response  = array('success' => True , 'message' => '', 'linkn' => base_url().'app/transaction');
            echo json_encode($response);
		}
		else
		{
			$response  = array('success' => false , 'message' => 'Something went wrong');
            echo json_encode($response);
		}
	}

	public function askEdit()
	{
		$usr_id = $this->session->userdata('usr_id');
		$check = $this->refmodel->editAsk($usr_id);
		if(!empty($check))
		{
			$response  = array('success' => True , 'message' => '', 'linkn' => base_url().'app/transaction');
            echo json_encode($response);
		}
		else
		{
			$response  = array('success' => false , 'message' => 'Something went wrong');
            echo json_encode($response);
		}
	}

	public function giveEdit()
	{
		$usr_id = $this->session->userdata('usr_id');
		$check = $this->refmodel->editGive($usr_id);
		if(!empty($check))
		{
			$response  = array('success' => True , 'message' => '', 'linkn' => base_url().'app/transaction');
            echo json_encode($response);
		}
		else
		{
			$response  = array('success' => false , 'message' => 'Something went wrong');
            echo json_encode($response);
		}
	}

	public function deleteTrans()
	{
		$id = $this->input->post('usr_trans_id');
	    if($this->refmodel->transDelete($id))
	    {
	       $response = array('success' => True, 'message'=>'', 'linkn'=>base_url().'app/transaction');
	       echo json_encode($response);
	    }	
	}

}