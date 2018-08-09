<?php 
/**
* 
*/
class Company extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Company_model');

		if (!$this->session->userdata('logined') ||
			$this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['data_company']=$this->Company_model->ambil_data();
		$this->load->view('Company/company_list',$data);
	}

	function lihat($id)
	{
		$data['data_company']=$this->Company_model->ambil_data_idd($id);
		$this->load->view('Company/company_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'			=>site_url('Company/tambah_aksi'),
			'nama'				=>set_value('nama'),
			'alamat'			=>set_value('alamat'),
			'telepon'			=>set_value('telepon'),
			'fax'				=>set_value('fax'),
			'id_perusahaan'		=>set_value('id_perusahaan'),
			'button'			=>'Add'
		);
		$this->load->view('Company/company_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_perusahaan'	=>$this->input->post('id_perusahaan'),
			'nama'			=>$this->input->post('nama'),
			'alamat'		=>$this->input->post('alamat'),
			'telepon'		=>$this->input->post('telepon'),
			'fax'			=>$this->input->post('fax')
		);
		$this->Company_model->tambah_data($data);
		redirect(site_url('Company'));
	}

	public function delete($id)
	{
		$this->Company_model->hapus_data($id);
		redirect(site_url('Company'));
	}

	function edit($id)
	{
		$cl=$this->Company_model->ambil_data_id($id);
		$data=array(
			'action'			=>site_url('Company/edit_aksi'),
			'id_perusahaan'			=>set_value('id_perusahaan',$cl->id_perusahaan),
			'nama'				=>set_value('nama',$cl->nama),
			'alamat'		=>set_value('alamat',$cl->alamat),
			'telepon'			=>set_value('telepon',$cl->telepon),
			'fax'			=>set_value('fax',$cl->fax),
			'button'			=>'Edit'
		);
		$this->load->view('Company/company_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'nama'			=>$this->input->post('nama'),
			'alamat'	=>$this->input->post('alamat'),
			'telepon'		=>$this->input->post('telepon'),
			'fax'		=>$this->input->post('fax')
		);
		$id=$this->input->post('id_perusahaan');
		$this->Company_model->edit_data($id,$data);
		redirect(site_url('Company'));
	}
}
?>
