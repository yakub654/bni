<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('form', 'url'));
		$this->load->model('app/user_add');
		$this->load->model('app/loginUser');
	
	}

	public function index()
	{
		echo 'welcome front';
	}

	
	public function user_list()
	{
		if($this->session->userdata('usr_email')!='')
		{
			$this->load->view('user-list');
		}
		else
		{
			redirect(site_url('app'));
		}
	}

	public function user_profile()
	{
		if($this->session->userdata('usr_email')!='')
		{
			$this->load->view('user-profile');
		}
		else
		{
			redirect(site_url('app'));
		}
	}

	public function user_add()
	{
		if($this->session->userdata('usr_email')!='')
		{
			$this->load->view('user-add');
		}
		else
		{
			redirect(site_url('app'));
		}
		
	}

	public function validate_user()
	{
		$data['prfimg_name']  = '';
		$data['lgimg_name']   = ''; // if empty 
		
		// serverside validation rules 
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('cmp_name', 'Company', 'required');
		$this->form_validation->set_rules('tg_line', 'Tag line', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('cnf_password', 'Confirm-Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mob_no','Mobile','required|numeric|min_length[10]');

        if($this->form_validation->run() == TRUE)
		{
			if(!empty($_FILES['prf_img']['name'])) //profile image upload
			{
				$config['upload_path']      = './assets/pages/img/profile-pic';
				$config['allowed_types']    = 'gif|jpg|png|doc|txt';
				$config['max_size']         = 1024 * 8;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('prf_img'))
				{
					$prfimg_name            = $this->upload->data();
					$data['prfimg_name']    = $prfimg_name['file_name'];
				}	 	
			}
			if(!empty($_FILES['logo_img']['name'])) //logo image upload 
			{
				$config['upload_path']      = './assets/pages/img/logo-pic';
				$config['allowed_types']    = 'gif|jpg|png|doc|txt';
				$config['max_size']         = 1024 * 8;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('logo_img'))
				{
					$lgimg_name             = $this->upload->data();
					$data['lgimg_name']     = $lgimg_name['file_name'];
				}	
			}
			$data['email_data']             = (array)json_decode($this->input->post('emailAdd')); // repeater emaildata 
			$data['mobile_data']            = (array)json_decode($this->input->post('mobileAdd')); // repeater mobiledata
			$data['session_id']				= $this->session->userdata('usr_id'); // sessdata for admin creation 

			$userId                         = $this->user_add->user_reg($data);

			if($userId)
			{
				$response  = array('success' => True , 'message' => '', 'linkn' => base_url().'app/user-list');
        	    echo json_encode($response);
			}
			

			// if($email_data)
			// {
			// 	foreach ($email_data as $key)
			// 	{
			// 		echo($key->emailAdd);
			// 	}
			// }
			// if($mobile_data)
			// {
			// 	foreach ($mobile_data as $key)
			// 	{
			// 		echo($key->mobileAdd);
			// 	}
			// }

			    // $response  = array('success' => false , 'message' => 'reload');
       //  	    echo json_encode($response);
				
		}
		else
		{
			    $response  = array('success' => false , 'message' => 'validation failed');
        	    echo json_encode($response);
				
		}
			       
	}

	public function isEmailPresent()
	{
		
		$value=$this->input->post("email");
		$validater = $this->user_add->validate_Email($value);
		if(!empty($validater))
		{
			
			echo 'false';
		}
		else
		{
			
			echo 'true';
		}
	}

	
}
