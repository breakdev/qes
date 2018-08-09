<?php 
/**
* 
*/
class CompanyM extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('CompanyM_model');

		if (!$this->session->userdata('loginedmember') ||
			$this->session->userdata('loginedmember') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['data_companym']=$this->CompanyM_model->ambil_data();
		$this->load->view('CompanyM/companym_list',$data);
	}

	
}
?>
