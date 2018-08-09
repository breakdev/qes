<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Member_model');
		
		if (!$this->session->userdata('loginedmember') ||
			$this->session->userdata('loginedmember') != true)
		{
			redirect('/');
		}
		
	}

	function index()
	{
		$this->load->view('member');
	}
}
 ?>