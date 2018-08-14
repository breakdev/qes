<?php 
/**
* 
*/
class Career_model extends CI_Model
{
	public $nama_table	= 'job_position';
	public $id 			= 'id_position';
	public $order 		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->nama_table);
	}

	function  edit_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);
	}
	//Login
	function cek_login($pass,$user)
	{
		$this->db->where('pass', $pass);
		$this->db->where('user', $user);
		return $this->db->get($this->nama_table)->row();
	}
}
 ?>