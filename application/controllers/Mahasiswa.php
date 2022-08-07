<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}
    }

	public function UploadFile()
	{
		$data['current_user'] = $this->auth_model->current_user();

        $fileName = $data['current_user']->NIM.'_'.$data['current_user']->Nama_mahasiswa.'_'.$_FILES['file']['name'];
		$config['upload_path'] = './document/proposal';
        $config['allowed_types'] = 'jpg|jpeg|png|svg|pdf';
        $config['file_name'] = $fileName;
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')) {

            $fileData = $this->upload->data();

            $upload = [
                'dokumen' => $fileData['file_name'],
                'nim' => $data['current_user']->NIM,
                'type' => 1,
                'status' => 1
            ];

            if($this->mahasiswa_model->Upload($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>'. $fileData['file_name'] .'</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            }

            redirect(base_url('dok-proposal'));
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url('dok-proposal'));
        }

		$this->load->view('webadmin/dok-proposal.php', $data);
	}

}
