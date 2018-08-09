<?php 
/**
* 
*/
class Job extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Job_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_job']=$this->Job_model->ambil_data();
		$this->load->view('Job/job_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'		=>site_url('Job/tambah_aksi'),
			'id_staff'		=>set_value('id_staff'),
			'id_perusahaan'	=>set_value('id_perusahaan'),
			'tgl_mulai'		=>set_value('tgl_mulai'),
			'tgl_selesai'	=>set_value('tgl_selesai'),
			'desc'			=>set_value('desc'),
			'id_job'		=>set_value('id_job'),
			'button'		=>'Add'
		);
		$this->load->view('Job/job_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_staff'		=>$this->input->post('id_staff'),
			'id_perusahaan'	=>$this->input->post('id_perusahaan'),
			'tgl_mulai'		=>$this->input->post('tgl_mulai'),
			'tgl_selesai'	=>$this->input->post('tgl_selesai'),
			'desc'			=>$this->input->post('desc')
		);
		$this->Job_model->tambah_data($data);
		redirect(site_url('job'));
	}

	public function delete($id)
	{
		$this->Job_model->hapus_data($id);
		redirect(site_url('job'));
	}

	function edit($id)
	{
		$mhs=$this->Job_model->ambil_data_id($id);
		$data=array(
			'action'		=>site_url('Job/edit_aksi'),
			'id_job'		=>set_value('id_job',$mhs->id_job),
			'id_staff'		=>set_value('id_staff',$mhs->id_staff),
			'id_perusahaan'	=>set_value('id_perusahaan',$mhs->id_perusahaan),
			'tgl_mulai'		=>set_value('tgl_mulai',$mhs->tgl_mulai),
			'tgl_selesai'	=>set_value('tgl_selesai',$mhs->tgl_selesai),
			'desc'			=>set_value('desc',$mhs->desc),
			'button'		=>'Edit'
		);
		$this->load->view('Job/job_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'id_staff'		=>$this->input->post('id_staff'),
			'id_perusahaan'	=>$this->input->post('id_perusahaan'),
			'tgl_mulai'		=>$this->input->post('tgl_mulai'),
			'tgl_selesai'	=>$this->input->post('tgl_selesai'),
			'desc'			=>$this->input->post('desc')
		);
		$id=$this->input->post('id_job');
		$this->Job_model->edit_data($id,$data);
		redirect(site_url('job'));
	}
}
 ?>