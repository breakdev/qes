<?php 
/**
* 
*/
class Staff extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Staff_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_staff']=$this->Staff_model->ambil_data();
		$this->load->view('Staff/staff_list',$data);
	}

	function lihat($id)
	{
		$data['data_staff']=$this->Staff_model->ambil_data_idd($id);
		$this->load->view('Staff/staff_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('Staff/tambah_aksi'),
			'user'		=>set_value('user'),
			'pass'		=>set_value('pass'),
			'nama'	=>set_value('nama'),
			'email'	=>set_value('email'),
			'no_hp'	=>set_value('no_hp'),
			'jabatan'	=>set_value('jabatan'),
			'id_staff'		=>set_value('id_staff'),
			'button'	=>'Add'
		);
		$this->load->view('Staff/staff_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_staff' 	=>$this->input->post('id_staff'),
			'user'		=>$this->input->post('user'),
			'pass'		=>$this->input->post('pass'),
			'nama'		=>$this->input->post('nama'),
			'email'		=>$this->input->post('email'),
			'no_hp'		=>$this->input->post('no_hp'),
			'jabatan'	=>$this->input->post('jabatan')
		);
		$this->Staff_model->tambah_data($data);
		redirect(site_url('staff'));
	}

	public function delete($id)
	{
		$this->Staff_model->hapus_data($id);
		redirect(site_url('staff'));
	}

	function edit($id)
	{
		$st=$this->Staff_model->ambil_data_id($id);
		$data=array(
			'action'		=>site_url('Staff/edit_aksi'),
			'id_staff'		=>set_value('id_staff',$st->id_staff),
			'user'			=>set_value('user',$st->user),
			'pass'			=>set_value('pass',$st->pass),
			'nama'			=>set_value('nama',$st->nama),
			'email'			=>set_value('email',$st->email),
			'no_hp'			=>set_value('no_hp',$st->no_hp),
			'jabatan'		=>set_value('jabatan',$st->jabatan),
			'button'		=>'Edit'
		);
		$this->load->view('Staff/staff_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'user'		=>$this->input->post('user'),
			'pass'		=>$this->input->post('pass'),
			'nama'		=>$this->input->post('nama'),
			'email'		=>$this->input->post('email'),
			'no_hp'		=>$this->input->post('no_hp'),
			'jabatan'	=>$this->input->post('jabatan')
		);
		$id=$this->input->post('id_staff');
		$this->Staff_model->edit_data($id,$data);
		redirect(site_url('staff'));
	}
}
 ?>