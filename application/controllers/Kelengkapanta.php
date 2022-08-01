<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelengkapanta extends CI_Controller {

	public function index()
	{
		$this->load->view('template_admin/header');
		$this->load->view('webadmin/kelengkapanta');
        $this->load->view('template_admin/footer');
	}
}
