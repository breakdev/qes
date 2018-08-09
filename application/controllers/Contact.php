<?php 
/**
* 
*/
class Contact extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Contact_model');
		
		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['data_contact']=$this->Contact_model->ambil_data();
		$this->load->view('Contact/contact_list',$data);
	}

	public function delete($id)
	{
		$this->Contact_model->hapus_data($id);
		redirect(site_url('contact'));
	}
}
 ?>
