<?php 
/**
* 
*/
class Career extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Career_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_career']=$this->Career_model->ambil_data();
		$this->load->view('Career/career_list',$data);
	}
	
	public function tambah()
	{
		$data=array(
			'action'			=>site_url('Career/tambah_aksi'),
			'id_position'		=>set_value('id_position'),
			'position_name'		=>set_value('position_name'),
			'description'		=>set_value('description'),
			'requirement'		=>set_value('requirement'),
			'button'			=>'Add'
		);
		$this->load->view('Career/career_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_position' 		=>$this->input->post('id_position'),
			'position_name'		=>$this->input->post('position_name'),
			'description'		=>$this->input->post('description'),
			'requirement'		=>$this->input->post('requirement')
		);
		$this->Career_model->tambah_data($data);
		redirect(site_url('Career'));
	}

	public function delete($id)
	{
		$this->Career_model->hapus_data($id);
		redirect(site_url('Career'));
	}

	function edit($id)
	{
		$row=$this->Career_model->ambil_data_id($id);
		$data=array(
			'action'			=>site_url('Career/edit_aksi'),
			'id_position'		=>set_value('id_position',$row->id_position),
			'position_name'		=>set_value('position_name',$row->position_name),
			'description'		=>set_value('description',$row->description),
			'requirement'		=>set_value('requirement',$row->requirement),
			'button'			=>'Edit'
		);
		$this->load->view('Career/career_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'position_name'	=>$this->input->post('position_name'),
			'description'	=>$this->input->post('description'),
			'requirement'	=>$this->input->post('requirement')
		);
		$id=$this->input->post('id_position');
		$this->Career_model->edit_data($id,$data);
		redirect(site_url('Career'));
	}
}
 ?>