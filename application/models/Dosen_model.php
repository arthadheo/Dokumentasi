<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dosen_model extends CI_Model
{
	const SESSION_KEY = 'user_id';

	public function getAllData()
	{
		$query1 = $this->db->select('*')->from('dosen')->get();
    
		return $query1->result();
	}

	public function getDataByNip($nip)
	{
		$query1 = $this->db->select('*')->from('dosen')->where('NIP', $nip)->get();
    
		return $query1->row();
	}
	
}
