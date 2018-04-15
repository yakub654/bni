<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Crm_event
{
	public $CI;
	private $rest_username;
	private $rest_password;
	public function __construct()
	{
		$this->CI 			= &get_instance();
		$this->rest_username = $this->CI->config->item('rest_user');
		$this->rest_password = $this->CI->config->item('rest_pass');
	}
	
	function sendEmail($arrEmailData = array())
	{
		$email_from_addr		= isset($arrEmailData['admin_email_from'])?$arrEmailData['admin_email_from']:$this->CI->config->item('admin_email_from');
		$email_from_name		= isset($arrEmailData['admin_from_name'])?$arrEmailData['admin_from_name']:$this->CI->config->item('admin_from_name');
		$email_message			= $arrEmailData['email_content'];
		$email_template			= $arrEmailData['email_template'];
		$email_template_data	= $arrEmailData['email_template_data'];
		$subject				= $arrEmailData['email_subject'];
		
		//Find and replace values in email
		$emailArr				= explode(',',$arrEmailData['email']);
		$email					= $emailArr[0];
		
		$find 					= array("#NAME#", "#EMAIL#", "#COMPANYNAME#");
		$replace    			= array($arrEmailData['name'], $email, $this->CI->config->item('admin_from_name'));
		$email_message_string 	= str_replace($find, $replace, $email_message);
		$email					= $arrEmailData['email'];
		
		
		if(!empty($email))
		{	
			$member_email 			= $emailArr;
			if($this->CI->config->item('mail_is_smtp'))
			{
				$email_config 	= array(
								  'protocol' 	=> 'smtp',
								  'smtp_host' 	=> $this->CI->config->item('mail_smtp_host'),
								  'smtp_user' 	=> $this->CI->config->item('mail_smtp_user'),
								  'smtp_pass' 	=> $this->CI->config->item('mail_smtp_pass'),
								  'smtp_port' 	=> $this->CI->config->item('mail_smtp_port'),
								  'smtp_crypto'	=> 'tls',
								  'smtp_keepalive' => TRUE,
								  'smtp_timeout' =>'120',
								  'mailtype'	=> 'html',
								  'charset'		=> 'utf-8',
								  'crlf' 		=> "\r\n",
								  'newline' 	=> "\r\n"
								);	
			}
			else
			{
				$email_config 	= array(
								  'protocol' 	=> 'sendmail',
								  'smtp_port' 	=> $this->CI->config->item('mail_smtp_port'),
								  //'smtp_crypto'	=> '',
								  //'smtp_keepalive' => TRUE,
								  //'smtp_timeout' =>'120',
								  'mailtype'	=> 'html',
								  'charset'		=> 'utf-8',
								  'crlf' 		=> "\r\n",
								  'newline' 	=> "\r\n"
								);	
			}
			
			
			$this->CI->load->library('email');
			$this->CI->email->initialize($email_config);
			$this->CI->email->clear(TRUE);  
			$this->CI->email->set_mailtype('html');		
			$this->CI->email->set_newline("\r\n");
			$this->CI->email->from($email_from_addr,$email_from_name);  
			$this->CI->email->to($member_email); 
			if(isset($arrEmailData['attachment']) && !empty($arrEmailData['attachment']))
			{
				$this->CI->email->attach($arrEmailData['attachment']); 
			}
			$this->CI->email->subject($subject);
			if(!empty($email_template))
			{
				$data['emailData'] = $email_template_data;
				$email_message_string = $this->CI->load->view('./emailtemplate/'.$email_template, $data , true);
			}
			
			$this->CI->email->message($email_message_string);  	
			$this->CI->email->send();
			/* echo $email_message_string;
			echo $this->CI->email->print_debugger();		
			exit;			 */
		}
	}
	
	function push_breadcrumb($name, $url = '#', $append = TRUE)
	{
		$entry = array('name' => $name, 'url' => $url);

		if ($append)
			$this->breadcrumb[] = $entry;
		else
			array_unshift($this->breadcrumb, $entry);
	}
	
	function get_breadcrumb()
	{
		return $this->breadcrumb;   
	}
	
	function add_script_log($arrLogData = array())
	{
		$this->CI->db->insert('script_log', $arrLogData); 
	}
	
	
	
	
	
}
?>