<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminValidasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('dokumen_model');
		$this->load->model('mahasiswa_model');
		$this->load->model('dosen_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}
    }

	public function index($nim)
	{
		$data['title'] = 'Admin Validasi';
		$data['user'] = $this->auth_model->current_user();

		$data['mahasiswa'] = $this->mahasiswa_model->getDataByNim($nim);
		$data['dosen'] = $this->dosen_model->getAllData();

		$data['dokproposal'] = $this->dokumen_model->getDataProposalByMahasiswa($nim);

		$data['dokseminar'] = $this->dokumen_model->getDataSeminarByMahasiswa($nim);

		$data['doksidangtype1'] = $this->dokumen_model->getDataSidangByMahasiswaType1($nim);
		$data['doksidangtype2'] = $this->dokumen_model->getDataSidangByMahasiswaType2($nim);
		$data['doksidangtype3'] = $this->dokumen_model->getDataSidangByMahasiswaType3($nim);
		$data['doksidangtype4'] = $this->dokumen_model->getDataSidangByMahasiswaType4($nim);
		$data['doksidangtype5'] = $this->dokumen_model->getDataSidangByMahasiswaType5($nim);
		$data['doksidangtype6'] = $this->dokumen_model->getDataSidangByMahasiswaType6($nim);

		$data['dokyudisiumtype1'] = $this->dokumen_model->getDataYudisiumByMahasiswaType1($nim);
		$data['dokyudisiumtype2'] = $this->dokumen_model->getDataYudisiumByMahasiswaType2($nim);
		$data['dokyudisiumtype3'] = $this->dokumen_model->getDataYudisiumByMahasiswaType3($nim);
		$data['dokyudisiumtype4'] = $this->dokumen_model->getDataYudisiumByMahasiswaType4($nim);
		$data['dokyudisiumtype5'] = $this->dokumen_model->getDataYudisiumByMahasiswaType5($nim);
		$data['dokyudisiumtype6'] = $this->dokumen_model->getDataYudisiumByMahasiswaType6($nim);
		$data['dokyudisiumtype7'] = $this->dokumen_model->getDataYudisiumByMahasiswaType7($nim);
		$data['dokyudisiumtype8'] = $this->dokumen_model->getDataYudisiumByMahasiswaType8($nim);
		$data['dokyudisiumtype9'] = $this->dokumen_model->getDataYudisiumByMahasiswaType9($nim);
		$data['dokyudisiumtype10'] = $this->dokumen_model->getDataYudisiumByMahasiswaType10($nim);
		$data['dokyudisiumtype11'] = $this->dokumen_model->getDataYudisiumByMahasiswaType11($nim);
		$data['dokyudisiumtype12'] = $this->dokumen_model->getDataYudisiumByMahasiswaType12($nim);

        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/adminvalidasi', $data);
        $this->load->view('template_admin/footer');
	}

	public function validasiAdmin($table, $nim, $type, $status)
	{
		if ($table == 1) {
			$tableName = "dokumenproposal";
		}elseif ($table == 2) {
			$tableName = "dokumenseminarkemajuan";
		}elseif ($table == 3) {
			$tableName = "dokumensidang";
		}else{
			$tableName = "dokumenyudisium";
		}
		$data['table_name'] = $tableName;
		$data['nim'] = $nim;
		$data['type'] = $type;
		$data['status'] = $status;

		$this->dokumen_model->validasiDokumen($data);
		redirect('admin-validasi/'.$nim);
	}
}
