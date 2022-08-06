<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokProposal extends CI_Controller {

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
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $data['title'] = 'Dashboard Proposal';
		$data['user'] = $this->auth_model->current_user();
        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dokproposal', $data);
        $this->load->view('template_admin/footer');
	}
}
