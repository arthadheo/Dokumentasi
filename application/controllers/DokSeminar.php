<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokSeminar extends CI_Controller {

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
        $data['title'] = 'Dokumen Seminar';
		$data['user'] = $this->auth_model->current_user();
        $nim = $this->auth_model->current_user()->NIM;
		$data['dokseminar'] = $this->dokumen_model->getDataSeminarByMahasiswa($nim);

        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dokseminar', $data);
        $this->load->view('template_admin/footer');
	}

	public function UploadFile()
	{
		$data['current_user'] = $this->auth_model->current_user();

        $fileName = $data['current_user']->NIM.'_'.$data['current_user']->Nama_mahasiswa.'_'.$_FILES['file']['name'];
		$config['upload_path'] = './document/seminar';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['file_name'] = $fileName;
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')) {

            $fileData = $this->upload->data();

            $upload = [
                'dokumen' => $fileData['file_name'],
                'nim' => $data['current_user']->NIM,
                'status' => 1
            ];

            if($this->dokumen_model->UploadSeminar($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dok-seminar'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dok-seminar'));
        }

		$this->load->view('webadmin/dok-seminar.php', $data);
	}

    public function UpdateFile()
	{
		$data['current_user'] = $this->auth_model->current_user();

        $fileName = $data['current_user']->NIM.'_'.$data['current_user']->Nama_mahasiswa.'_'.$_FILES['file']['name'].'-update';
		$config['upload_path'] = './document/seminar';
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

            if($this->dokumen_model->UpdateSeminar($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dok-seminar'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dok-seminar'));
        }

		$this->load->view('webadmin/dok-seminar.php', $data);
	}
}
