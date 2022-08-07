<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokYudisium extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('dokumen_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $data['title'] = 'Dokumen Yudisium';
		$data['user'] = $this->auth_model->current_user();
		$data['dokyudisiumtype1'] = $this->dokumen_model->getDataYudisiumByMahasiswaType1();
		$data['dokyudisiumtype2'] = $this->dokumen_model->getDataYudisiumByMahasiswaType2();
		$data['dokyudisiumtype3'] = $this->dokumen_model->getDataYudisiumByMahasiswaType3();
		$data['dokyudisiumtype4'] = $this->dokumen_model->getDataYudisiumByMahasiswaType4();
		$data['dokyudisiumtype5'] = $this->dokumen_model->getDataYudisiumByMahasiswaType5();
		$data['dokyudisiumtype6'] = $this->dokumen_model->getDataYudisiumByMahasiswaType6();
		$data['dokyudisiumtype7'] = $this->dokumen_model->getDataYudisiumByMahasiswaType7();
		$data['dokyudisiumtype8'] = $this->dokumen_model->getDataYudisiumByMahasiswaType8();
		$data['dokyudisiumtype9'] = $this->dokumen_model->getDataYudisiumByMahasiswaType9();
		$data['dokyudisiumtype10'] = $this->dokumen_model->getDataYudisiumByMahasiswaType10();
		$data['dokyudisiumtype11'] = $this->dokumen_model->getDataYudisiumByMahasiswaType11();
		$data['dokyudisiumtype12'] = $this->dokumen_model->getDataYudisiumByMahasiswaType12();

        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dokyudisium', $data);
        $this->load->view('template_admin/footer');
	}

	public function UploadFile($type)
	{
		$data['current_user'] = $this->auth_model->current_user();

		if ($type == 1) {
			$typenya = "BASidangTugasAkhir";
		}elseif ($type == 2) {
			$typenya = "RevisiLaporanTugasAkhir";
		}elseif ($type == 3) {
			$typenya = "SuratKeteranganPerbaikanTugasAkhir";
		}elseif ($type == 4) {
			$typenya = "TranskripMahasiswa144SKS";
		}elseif ($type == 5) {
			$typenya = "TranskripPEM Minimum1300";
		}elseif ($type == 6) {
			$typenya = "SertifikatTOEFLMinimum475";
		}elseif ($type == 7) {
			$typenya = "SuratKeteranganBebasPustaka";
		}elseif ($type == 8) {
			$typenya = "Surat KeteranganBebasAset";
		}elseif ($type == 9) {
			$typenya = "SuratKeteranganLunasSPP";
		}elseif ($type == 10) {
			$typenya = "FotoHitamPutih4x6";
		}elseif ($type == 11){
			$typenya = "FormulirPendaftaranYudisium";
		}elseif ($type == 12) {
			$typenya = "KartuKeluarga";
		}else{
			$typenya = "Upps..";
		}

        $fileName = $typenya.'_'.$data['current_user']->NIM.'_'.$data['current_user']->Nama_mahasiswa.'_'.$_FILES['file']['name'];
		$config['upload_path'] = './document/yudisium';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['file_name'] = $fileName;
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')) {

            $fileData = $this->upload->data();

            $upload = [
                'dokumen' => $fileData['file_name'],
                'nim' => $data['current_user']->NIM,
                'dokumen_ttd' => '',
                'type' => $type,
                'status' => 1
            ];

            if($this->dokumen_model->UploadYudisium($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dok-yudisium'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dok-yudisium'));
        }

		$this->load->view('webadmin/dok-yudisium.php', $data);
	}
}
