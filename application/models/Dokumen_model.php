<?php

use LDAP\Result;
use Illuminate\Database\Eloquent\Model;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dokumen_model extends CI_Model
{
	private $_table = "user";
	private $_tablemahasiswa = "mahasiswa";
	const SESSION_KEY = 'user_id';

	public function getDataProposalByMahasiswa($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumenproposal', ['nim' => $nim]);
    
		return $query1->row();
	}
    
    public function UploadProposal($data)
	{
		$this->db->insert('dokumenproposal', $data); 
	}

    public function UpdateProposal($data)
	{
		$nim = $this->auth_model->current_user()->NIM;

		$this->db->where('nim', $nim);
		
		$this->db->update('dokumenproposal', $data);
		
	}

	public function getDataSeminarByMahasiswa($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumenseminarkemajuan', ['nim' => $nim]);
    
		return $query1->row();
	}

    public function UploadSeminar($data)
	{
		$this->db->insert('dokumenseminarkemajuan', $data); 
	}

	public function UpdateSeminar($data)
	{
		$nim = $this->auth_model->current_user()->NIM;

		$this->db->where('nim', $nim);
		
		$this->db->update('dokumenseminarkemajuan', $data);
		
	}

	public function getDataSidangByMahasiswaType1($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 1]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType2($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 2]);
    
		return $query1->row();
	}
    
	public function getDataSidangByMahasiswaType3($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 3]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType4($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 4]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType5($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 5]);
    
		return $query1->row();
	}

	public function getDataSidangByMahasiswaType6($nim)
	{
        $data['current_user'] = $this->auth_model->current_user();
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'type' => 6]);
    
		return $query1->row();
	}

	public function UploadSidang($data)
	{
		$this->db->insert('dokumensidang', $data); 
	}

	public function UpdateSidang($data, $type)
	{
		$nim = $this->auth_model->current_user()->NIM;

		$this->db->where('nim', $nim);
		$this->db->where('type', $type);
		
		$this->db->update('dokumensidang', $data);
		
	}

	public function UpdateTtdSidang($data, $type, $nim)
	{

		$this->db->where('nim', $nim);
		$this->db->where('type', $type);
		
		$this->db->update('dokumensidang', $data);
		
	}

    public function getDataYudisiumByMahasiswaType1($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 1]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType2($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 2]);
    
		return $query1->row();
	}
    
	public function getDataYudisiumByMahasiswaType3($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 3]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType4($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 4]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType5($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 5]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType6($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 6]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType7($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 7]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType8($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 8]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType9($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 9]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType10($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 10]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType11($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 11]);
    
		return $query1->row();
	}

	public function getDataYudisiumByMahasiswaType12($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'type' => 12]);
    
		return $query1->row();
	}

	public function UploadYudisium($data)
	{
		$this->db->insert('dokumenyudisium', $data); 
	}

	public function UpdateYudisium($data, $type)
	{
		$nim = $this->auth_model->current_user()->NIM;

		$this->db->where('nim', $nim);
		$this->db->where('type', $type);
		
		$this->db->update('dokumenyudisium', $data);
		
	}

	public function UpdateTtdYudisium($data, $type, $nim)
	{

		$this->db->where('nim', $nim);
		$this->db->where('type', $type);
		
		$this->db->update('dokumenyudisium', $data);
		
	}

	public function CountDokumenProposal($nim)
	{
		$query1 = $this->db->get_where('dokumenproposal', ['nim' => $nim, 'status' => '2']);
    
		return $query1->num_rows();
	}

	public function CountDokumenSeminar($nim)
	{
		$query1 = $this->db->get_where('dokumenseminarkemajuan', ['nim' => $nim, 'status' => '2']);
    
		return $query1->num_rows();
	}

    public function CountDokumenSidang($nim)
	{
		$query1 = $this->db->get_where('dokumensidang', ['nim' => $nim, 'status' => '2']);
		
		return $query1->num_rows();
	}
	
    public function CountDokumenYudisium($nim)
	{
		$query1 = $this->db->get_where('dokumenyudisium', ['nim' => $nim, 'status' => '2']);
		
		return $query1->num_rows();
	}

	public function validasiDokumen($data)
	{
		extract($data);

		$this->db->where('nim', $nim);
		if($type != 0){
			$this->db->where('type', $type);
		}
		$this->db->update($table_name, array('status' => $status));
		return true;
	}


	
}
