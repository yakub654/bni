<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('form', 'url'));
		$this->load->model('user_add');
		$this->load->model('loginUser');
		$this->load->helper('cookie');
		
	}


	public function login_view()
	{
		if(get_cookie('email'))
		{
			redirect(base_url().'app/dashboard');
		}
		$this->load->view('login_users');
	}

	// public function datedisplay()
	// {
	// 	date_default_timezone_set("Asia/Calcutta");
	// 	$data = date("d-m-Y H-i-s");
	// 	echo $data;
	// }

	public function login_Users()
	{
		$email = $this->input->post('email');
		$remember_cookie = $this->input->post('remember');
		$password = $this->input->post('password');
		$data['user_credentials'] = $this->loginUser->isAuth($email);
		if(!empty($data['user_credentials']))
		{
			$passwordHashed =  $data['user_credentials']->usr_password;
		}
		
		if($data['user_credentials'])
		{
			if(password_verify($password, $passwordHashed))
			{
				$session_data=array(
			 			'usr_name' => $data['user_credentials']->usr_name,
			 			'usr_email' => $data['user_credentials']->usr_email,
			 			'usr_companyName' => $data['user_credentials']->usr_companyName,
			 			'usr_mobile' => $data['user_credentials']->usr_mobile,
			 			'usr_address' => $data['user_credentials']->usr_address,
			 			'usr_profilePic' => $data['user_credentials']->usr_profilePic,
			 			'usr_id'  => $data['user_credentials']->usr_id,
			 		);
				$this->session->set_userdata($session_data);
				// cookie start
				if($remember_cookie == 'true')
			 		{
			 			set_cookie('email',"'".$email."'",365*24*60*60);
			 		}
				// cookie end
				$response = array('success' => True, 'message'=>'loggedIn', 'linkn' => base_url().'app/dashboard');
			 		        echo json_encode($response);

			}
			else
			{
				$response = array('success' => false, 'message'=>'1');
			 		        echo json_encode($response);
			}
		}
		else
		{
			$response = array('success' => false, 'message'=>'2');
			 		        echo json_encode($response);
		}


	}

	public function dashboard()
	{
		if($this->session->userdata('usr_email')!='')
		{
			$this->load->view('dashboard');
		}
		else
		{
			redirect(base_url());
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('usr_name');
		$this->session->unset_userdata('usr_email');
		$this->session->unset_userdata('usr_companyName');
		$this->session->unset_userdata('usr_mobile');
		$this->session->unset_userdata('usr_address');
		$this->session->unset_userdata('usr_profilePic');
		delete_cookie('email');
		redirect(base_url().'app');

	}
}