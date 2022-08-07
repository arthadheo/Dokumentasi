<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dokumen_model extends CI_Model
{
	private $_table = "user";
	private $_tablemahasiswa = "mahasiswa";
	const SESSION_KEY = 'user_id';

	public function getDataProposalByMahasiswa()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenproposal', ['nim' => $nim]);
    
		return $query1->row();
	}
    
    public function UploadProposal($data)
	{
		$this->db->insert('dokumenproposal', $data); 
	}

	public function getDataSeminarByMahasiswa()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenseminarkemajuan', ['nim' => $nim]);
    
		return $query1->row();
	}

    public function UploadSeminar($data)
	{
		$this->db->insert('dokumenseminarkemajuan', $data); 
	}

	public function getDataSidangByMahasiswaType1()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 1]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType2()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 2]);
    
		return $query1->row();
	}
    
	public function getDataSidangByMahasiswaType3()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 3]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType4()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 4]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType5()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 5]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType6()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 6]);
    
		return $query1->row();
	}

	public function UploadSidang($data)
	{
		$this->db->insert('dokumensidang', $data); 
	}

    public function getDataYudisiumByMahasiswaType1()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 1]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType2()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 2]);
    
		return $query1->row();
	}
    
	public function getDataYudisiumByMahasiswaType3()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 3]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType4()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 4]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType5()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 5]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType6()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 6]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType7()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 7]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType8()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 8]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType9()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 9]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType10()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 10]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType11()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 11]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType12()
	{
        $data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 12]);
    
		return $query1->row();
	}

	public function UploadYudisium($data)
	{
		$this->db->insert('dokumenyudisium', $data); 
	}

	public function CountDokumenProposal()
	{
		$data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenproposal', ['nim' => $nim, 'status' => '2']);
    
		return $query1->num_rows();
	}

	public function CountDokumenSeminar()
	{
		$data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenseminarkemajuan', ['nim' => $nim, 'status' => '2']);
    
		return $query1->num_rows();
	}

    public function CountDokumenSidang()
	{
		$data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'status' => '3']);
    
		return $query1->num_rows();
	}

    public function CountDokumenYudisium()
	{
		$data['current_user'] = $this->auth_model->current_user();
        $nim = $data['current_user']->NIM;
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'status' => '3']);
    
		return $query1->num_rows();
	}



	
}
