<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Admin_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$this->load->view('admin');
	}

	
}
 ?>