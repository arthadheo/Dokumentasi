<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('mahasiswa_model');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}
    }

	public function index()
	{
        $data['title'] = 'Dashboard';
		$data['user'] = $this->auth_model->current_user();
		$data['mahasiswa'] = $this->mahasiswa_model->getAllData();
    
        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dashboard', $data);
        $this->load->view('template_admin/footer');
	}

}
