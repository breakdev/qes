<?php 
/**
* 
*/
class Client extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Client_model');

	}

	function index()
	{
		$data['data_client']=$this->Client_model->ambil_data();
		$this->load->view('Client/client_list',$data);
	}

	
}
 ?>
