<?php 
/**
* 
*/
class Kontak_model extends CI_Model
{
	public $nama_table	= 'contact';
	public $id 			= 'id_contact';
	public $order 		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	//Untuk menambakan data ke table mahasiswa
	function tambah_data ($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}
}
 ?>