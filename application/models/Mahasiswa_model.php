<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mahasiswa_model extends CI_Model
{
	private $_table = "user";
	private $_tablemahasiswa = "mahasiswa";
	const SESSION_KEY = 'user_id';

	public function getAllData()
	{
		$query1 = $this->db->select('*')->from('mahasiswa')->get();
    
		return $query1->result();
	}

	public function getDataByNim($nim)
	{
		$query1 = $this->db->select('*')->from('mahasiswa')->where('nim', $nim)->get();
    
		return $query1->row();
	}
	
}
