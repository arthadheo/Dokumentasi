<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokSidang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('dokumen_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}
    }

	public function index()
	{
        $data['title'] = 'Dokumen Sidang';
		$data['user'] = $this->auth_model->current_user();
		$nim = $this->auth_model->current_user()->NIM;
		$data['doksidangtype1'] = $this->dokumen_model->getDataSidangByMahasiswaType1($nim);
		$data['doksidangtype2'] = $this->dokumen_model->getDataSidangByMahasiswaType2($nim);
		$data['doksidangtype3'] = $this->dokumen_model->getDataSidangByMahasiswaType3($nim);
		$data['doksidangtype4'] = $this->dokumen_model->getDataSidangByMahasiswaType4($nim);
		$data['doksidangtype5'] = $this->dokumen_model->getDataSidangByMahasiswaType5($nim);
		$data['doksidangtype6'] = $this->dokumen_model->getDataSidangByMahasiswaType6($nim);

        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/doksidang', $data);
        $this->load->view('template_admin/footer');
	}

	public function UploadFile($type)
	{
		$data['current_user'] = $this->auth_model->current_user();

		if ($type == 1) {
			$typenya = "LaporanTugasAkhir";
		}elseif ($type == 2) {
			$typenya = "BuktiBimbingan";
		}elseif ($type == 3) {
			$typenya = "FormPendaftaranSidangTugasAkhir";
		}elseif ($type == 4) {
			$typenya = "TranskripMahasiswa";
		}elseif ($type == 5) {
			$typenya = "BeritaAcaraSeminarKemajuan";
		}elseif ($type == 6) {
			$typenya = "FormKeteranganBebasPinjamLaboratorium";
		}else{
			$typenya = "Upps..";
		}

        $fileName = $typenya.'_'.$data['current_user']->NIM.'_'.$data['current_user']->Nama_mahasiswa.'_'.$_FILES['file']['name'];
		$config['upload_path'] = './document/sidang';
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

            if($this->dokumen_model->UploadSidang($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dok-sidang'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dok-sidang'));
        }

		$this->load->view('webadmin/dok-sidang.php', $data);
	}

	public function UpdateFile($type)
	{
		$data['current_user'] = $this->auth_model->current_user();

		if ($type == 1) {
			$typenya = "LaporanTugasAkhir";
		}elseif ($type == 2) {
			$typenya = "BuktiBimbingan";
		}elseif ($type == 3) {
			$typenya = "FormPendaftaranSidangTugasAkhir";
		}elseif ($type == 4) {
			$typenya = "TranskripMahasiswa";
		}elseif ($type == 5) {
			$typenya = "BeritaAcaraSeminarKemajuan";
		}elseif ($type == 6) {
			$typenya = "FormKeteranganBebasPinjamLaboratorium";
		}else{
			$typenya = "Upps..";
		}

        $fileName = $typenya.'_'.$data['current_user']->NIM.'_'.$data['current_user']->Nama_mahasiswa.'_'.$_FILES['file']['name'].'-update';
		$config['upload_path'] = './document/sidang';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['file_name'] = $fileName;
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file1')) {

            $fileData = $this->upload->data();

            $upload = [
                'dokumen' => $fileData['file_name'],
                'status' => 5
            ];

            if($this->dokumen_model->UpdateSidang($upload, $type)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dok-sidang'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dok-sidang'));
        }

		$this->load->view('webadmin/dok-sidang.php', $data);
	}
}
