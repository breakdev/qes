<?php 
/**
* 
*/
class Client_model extends CI_Model
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
	
}
 ?>