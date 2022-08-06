<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokSeminar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

	public function index()
	{
        $data['title'] = 'Dokumen Seminar';
		$s['mahasiswa'] = $this->Auth_model->mahasiswa();
        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dokseminar', $s);
        $this->load->view('template_admin/footer');
	}
}
