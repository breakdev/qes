<?php 
/**
* 
*/
class Member_model extends CI_Model
{
	public $nama_table	= 'staff';
	public $id 			= 'id_staff';
	public $order 		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}
	//untuk mengambil seluruh data mahasiswa
	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
	//untuk mengambil data per id seluruh mahasiswa
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
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