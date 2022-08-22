<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DosenValidasi extends CI_Controller {

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
		$data['title'] = 'Dosen Validasi';
		$data['user'] = $this->auth_model->current_user();

		$data['mahasiswa'] = $this->mahasiswa_model->getDataByNim($nim);
		$data['anakbimbing'] = $this->mahasiswa_model->getDataMahasiswaDosenByNim($nim);

		$data['doksidangtype1'] = $this->dokumen_model->getDataSidangByMahasiswaType1($nim);
		$data['doksidangtype2'] = $this->dokumen_model->getDataSidangByMahasiswaType2($nim);
		$data['doksidangtype3'] = $this->dokumen_model->getDataSidangByMahasiswaType3($nim);
		$data['doksidangtype5'] = $this->dokumen_model->getDataSidangByMahasiswaType5($nim);

		$data['dokyudisiumtype1'] = $this->dokumen_model->getDataYudisiumByMahasiswaType1($nim);
		$data['dokyudisiumtype2'] = $this->dokumen_model->getDataYudisiumByMahasiswaType2($nim);
		$data['dokyudisiumtype3'] = $this->dokumen_model->getDataYudisiumByMahasiswaType3($nim);

        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dosenValidasi', $data);
        $this->load->view('template_admin/footer');
	}

	public function UpdateFileTandaTanganSidang()
	{
		$type = $_POST['type'];
		$nim = $_POST['nim'];
		$status = $_POST['status'];

		if ($type == 1) {
			$typenya = "LaporanTugasAkhir";
		}elseif ($type == 2) {
			$typenya = "BuktiBimbingan";
		}elseif ($type == 3) {
			$typenya = "FormPendaftaranSidangTugasAkhir";
		}elseif ($type == 5) {
			$typenya = "BeritaAcaraSeminarKemajuan";
		}else{
			$typenya = "Upps..";
		}

        $fileName = $typenya.'_'.$nim.'-ttd';
		$config['upload_path'] = './document/sidang';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['file_name'] = $fileName;
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')) {

            $fileData = $this->upload->data();

            $upload = [
                'dokumen_ttd' => $fileData['file_name'],
                'status' => $status
            ];

            if($this->dokumen_model->UpdateTtdSidang($upload, $type, $nim)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dosen-validasi/'.$nim));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dosen-validasi/'.$nim));
        }

		redirect('dosen-validasi/'.$nim);
	}

	public function UpdateFileTandaTanganYudisium()
	{
		$type = $_POST['type'];
		$nim = $_POST['nim'];
		$status = $_POST['status'];

		if ($type == 1) {
			$typenya = "BASidangTugasAkhir";
		}elseif ($type == 2) {
			$typenya = "RevisiLaporanTugasAkhir";
		}elseif ($type == 3) {
			$typenya = "SuratKeteranganPerbaikanTugasAkhir";
		}else{
			$typenya = "Upps..";
		}

        $fileName = $typenya.'_'.$nim.'-ttd';
		$config['upload_path'] = './document/yudisium';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['file_name'] = $fileName;
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file1')) {

            $fileData = $this->upload->data();

            $upload = [
                'dokumen_ttd' => $fileData['file_name'],
                'status' => $status
            ];

            if($this->dokumen_model->UpdateTtdYudisium($upload, $type, $nim)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dosen-validasi/'.$nim));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dosen-validasi/'.$nim));
        }

		redirect('dosen-validasi/'.$nim);
	}
}
