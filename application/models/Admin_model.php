<?php 
/**
* 
*/
class Admin_model extends CI_Model
{
	public $nama_table	= 'admin';
	public $id 			= 'id';
	public $order 		= 'DESC';

	function __construct()
	{
		parent::__construct();
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