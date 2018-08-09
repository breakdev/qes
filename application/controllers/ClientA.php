<?php 
/**
* 
*/
class ClientA extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('ClientA_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['data_clienta']=$this->ClientA_model->ambil_data();
		$this->load->view('ClientA/clienta_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'			=>site_url('ClientA/tambah_aksi'),
			'years'				=>set_value('years'),
			'project_item'		=>set_value('project_item'),
			'client'			=>set_value('client'),
			'location'			=>set_value('location'),
			'description'		=>set_value('description'),
			'id_client'			=>set_value('id_client'),
			'button'			=>'Add'
		);
		$this->load->view('ClientA/clienta_form',$data);
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
		$this->ClientA_model->tambah_data($data);
		redirect(site_url('ClientA'));
	}

	public function delete($id)
	{
		$this->ClientA_model->hapus_data($id);
		redirect(site_url('ClientA'));
	}

	function edit($id)
	{
		$cl=$this->ClientA_model->ambil_data_id($id);
		$data=array(
			'action'			=>site_url('ClientA/edit_aksi'),
			'id_client'			=>set_value('id_client',$cl->id_client),
			'years'				=>set_value('years',$cl->years),
			'project_item'		=>set_value('project_item',$cl->project_item),
			'client'			=>set_value('client',$cl->client),
			'location'			=>set_value('location',$cl->location),
			'description'		=>set_value('description',$cl->description),
			'button'			=>'Edit'
		);
		$this->load->view('ClientA/clienta_form',$data);
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
		$this->ClientA_model->edit_data($id,$data);
		redirect(site_url('ClientA'));
	}
}
 ?>
