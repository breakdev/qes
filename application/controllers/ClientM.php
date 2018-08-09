<?php 
/**
* 
*/
class ClientM extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('ClientM_model');

		if (!$this->session->userdata('loginedmember') ||
		$this->session->userdata('loginedmember') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['data_clientm']=$this->ClientM_model->ambil_data();
		$this->load->view('ClientM/clientm_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'			=>site_url('ClientM/tambah_aksi'),
			'years'				=>set_value('years'),
			'project_item'		=>set_value('project_item'),
			'client'			=>set_value('client'),
			'location'			=>set_value('location'),
			'description'		=>set_value('description'),
			'id_client'			=>set_value('id_client'),
			'button'			=>'Add'
		);
		$this->load->view('ClientM/clientm_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'years'			=>$this->input->post('years'),
			'project_item'	=>$this->input->post('project_item'),
			'client'		=>$this->input->post('client'),
			'location'		=>$this->input->post('location'),
			'description'	=>$this->input->post('description')
		);
		$this->ClientM_model->tambah_data($data);
		redirect(site_url('ClientM'));
	}

	public function delete($id)
	{
		$this->ClientM_model->hapus_data($id);
		redirect(site_url('ClientM'));
	}

	function edit($id)
	{
		$cl=$this->ClientM_model->ambil_data_id($id);
		$data=array(
			'action'			=>site_url('ClientM/edit_aksi'),
			'id_client'			=>set_value('id_client',$cl->id_client),
			'years'				=>set_value('years',$cl->years),
			'project_item'		=>set_value('project_item',$cl->project_item),
			'client'			=>set_value('client',$cl->client),
			'location'			=>set_value('location',$cl->location),
			'description'		=>set_value('description',$cl->description),
			'button'			=>'Edit'
		);
		$this->load->view('ClientM/clientm_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'years'			=>$this->input->post('years'),
			'project_item'	=>$this->input->post('project_item'),
			'client'		=>$this->input->post('client'),
			'location'		=>$this->input->post('location'),
			'description'	=>$this->input->post('description')
		);
		$id=$this->input->post('id_client');
		$this->ClientM_model->edit_data($id,$data);
		redirect(site_url('ClientM'));
	}
}
 ?>
