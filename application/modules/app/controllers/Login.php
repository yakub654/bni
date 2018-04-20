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
		$this->load->helper('string');
		$this->load->library('email');
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

	public function forgetPass()
	{
		$email = $this->input->post('email');
		$data['email'] = $this->loginUser->getUserForget($email);
		
		if(!empty($data['email']))
		{
			$randompass = random_string('alnum',15);
			$data['string'] = $randompass;
			// storing that string  in database 
			$insert = $this->loginUser->addForget($data);
			//end of storing
			//message for the email
			$message = Email_MESSAGE;
			$link = base_url().'app/forget-Password/'.$randompass;
			$messagefinal = str_replace("%RESET_LINK%",$link,$message);

			//end
	
			
			// email to the user
			$config['protocol']       = 	  "smtp";
			$config['smtp_host'] 	  =       "ssl://smtp.gmail.com";
			$config['smtp_user'] 	  =       "ykhan707@gmail.com";
			$config['smtp_pass']      =       "Demon_down";
			$config['smtp_port']      =       465;
			$config['_smtp_auth']     =       "TRUE";
			$config['charset']        =       "utf-8";
			$config['wordwrap']       =       "TRUE";
			$config['newline']        =       "\r\n";
			$this->email->initialize($config);
			$this->email->from('ykhan707@gmail.com', 'Yakub');
			$this->email->to($email);
			$this->email->subject('Forget Test');
			$this->email->message($messagefinal);
			if ($this->email->send()) 
			{
				$response = array('success' => True, 'message'=>'Email has been Sent to your email please go and check and reset the password', 'linkn' => base_url().'app');
			    echo json_encode($response);
			}
			else
			{
				echo 'Not Send';
			}


		}
		else
		{
			echo 'not';
		}
	}

	public function isEmailPresent()
	{
		
		$value=$this->input->post("email");
		$validater = $this->user_add->validate_Email($value);
		if(empty($validater))
		{
			
			echo 'true';
		}
		else
		{
			
			echo 'false';
		}
	}

	public function checkLinkTime($id)
	{
		$check['user'] = $this->loginUser->linkTime($id);

		

		if(!empty($check['user']))
		{	
		    $this->load->view('reset',$check);
		}
		else
		{

			echo 'link expired';
		}


	}

	 public function changePassword()
	 {
	 	$id = $this->input->post('id');
	 	$userId = $this->loginUser->changePass($id);
		    if(!empty($userId))
		    {
		    	$response = array('success' => True, 'message'=>'Your password has been reset successfully Please log In again', 'linkn' => base_url().'app');
		    	echo json_encode($response);
		    }
		    else
		    {
		    	$response = array('success' => false, 'message'=>'Something went wrrong');
		    	echo json_encode($response);
		    }
	 }


}