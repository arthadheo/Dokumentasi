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

	public function getDataMahasiswaDosen(){
		$nip = $this->auth_model->current_user()->NIP;
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->where('nip', $nip)->get();
    
		return $query1->result();
	}

	public function getDataMahasiswaDosenByNim($nim){
		$nip = $this->auth_model->current_user()->NIP;
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->where('md.nip', $nip)->where('md.nim', $nim)->get();
    
		return $query1->row();
	}
	
}
