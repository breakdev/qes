<?php 
/**
* 
*/
class ClientM_model extends CI_Model
{
	public $nama_table	= 'client';
	public $id 			= 'id_client';
	public $order 		= 'ASC';

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

	//Untuk menambakan data ke table mahasiswa
	function tambah_data ($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}

	//Untuk menghapus data ke table mahasiswa
	function hapus_data ($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->nama_table);
	}
	//Untuk Mengedit data table mahasiswa
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