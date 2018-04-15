<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Crm_auth
{
	private $user_data;
	private $agent_data;
	private $breadcrumb;
	private $user_sub_arr;
	public  $CI;
	public function __construct()
	{
		$this->CI 			= &get_instance();
		$this->breadcrumb 	= array();
		$this->agent_data 	= array();
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
}
?>