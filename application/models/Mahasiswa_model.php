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

	public function getDataPembimbing($nim){
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->where('md.nim', $nim)->get();
    
		return $query1->result();
	}

	public function getDataPembimbing1($nim){
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->where('md.nim', $nim)->get();
    
		return $query1->row();
	}

	public function getPembimbing1($nim){
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->join('dosen as d', 'md.nip = d.NIP')->where('md.nim', $nim)->where('md.pembimbing', 1)->get();
    
		return $query1->row();
	}

	public function getPembimbing2($nim){
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->join('dosen as d', 'md.nip = d.NIP')->where('md.nim', $nim)->where('md.pembimbing', 2)->get();
    
		return $query1->row();
	}

	public function getDataMahasiswaDosenByNim($nim, $nip){
		$query1 = $this->db->select('*')->from('mahasiswadosen as md')->join('mahasiswa as m', 'md.nim = m.NIM')->join('dosen as d', 'md.nip = d.NIP')->where('md.nip', $nip)->where('md.nim', $nim)->get();
    
		return $query1->row();
	}

	public function insertPembimbing($data)
	{
		$this->db->insert('mahasiswadosen', $data); 
	}
	
}
