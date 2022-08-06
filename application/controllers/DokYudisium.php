<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokYudisium extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $data['title'] = 'Dokumen Yudisium';
		$data['user'] = $this->auth_model->current_user();
        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dokyudisium', $data);
        $this->load->view('template_admin/footer');
	}
}
