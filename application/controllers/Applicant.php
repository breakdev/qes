<?php 
/**
* 
*/
class Applicant extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Applicant_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_applicant']=$this->Applicant_model->ambil_data();
		$this->load->view('Applicant/applicant_list',$data);
	}
}
 ?>