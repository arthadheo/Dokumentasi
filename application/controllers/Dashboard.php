<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('mahasiswa_model');
		$this->load->model('dokumen_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}
    }

	public function index()
	{
		$level = $this->auth_model->current_user()->level;
		
		if ($level == 1) {
			$nim = $this->auth_model->current_user()->NIM;
			$dokumenProposal = $this->dokumen_model->CountDokumenProposal($nim)*100;
			$dokumenSeminar = $this->dokumen_model->CountDokumenSeminar($nim)*100;
			$dokumenSidang = ($this->dokumen_model->CountDokumenSidang($nim)/6)*100;
			$dokumenYudisium = ($this->dokumen_model->CountDokumenYudisium($nim)/12)*100;

			$data['dokumenProposal'] = $dokumenProposal;
			$data['dokumenSeminar'] = $dokumenSeminar;
			$data['dokumenSidang'] = ceil($dokumenSidang);
			$data['dokumenYudisium'] = ceil($dokumenYudisium);
		}

        $data['title'] = 'Dashboard';
		$data['user'] = $this->auth_model->current_user();
		$data['mahasiswa'] = $this->mahasiswa_model->getAllData();

        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dashboard', $data);
        $this->load->view('template_admin/footer');
	}

}
