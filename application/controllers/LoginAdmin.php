<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function index()
	{
		$this->load->view('webadmin/loginadminsite');
	}

    public function login()
    {
        $this->form_validation->set_rules('email_pegawai', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password_pegawai', 'Password', 'trim|required');

        if($this->form_validation->run() == false){
            $data['title'] = 'Login Admin';
		    $this->load->view('webadmin/loginadminsite', $data);
        }else{
            $this->_prosesloginadmin();
        }
    }

    private function _prosesloginadmin(){
        session_start();
        $email = $this->input->post('email_pegawai');
        $password = $this->input->post('password_pegawai');

        $pegawai = $this->db->get_where('pegawai', ['email_pegawai' => $email])->row_array();
        if($pegawai) {
            if(password_verify($password, $pegawai['password_pegawai'])) {
                $_SESSION['nama_pegawai'] = $pegawai['nama_pegawai'];
                $_SESSION['email_pegawai'] = $pegawai['email_pegawai'];
                $_SESSION['nomor_telepon_pegawai'] = $pegawai['nomor_telepon_pegawai'];
                redirect('Dashboard');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah </div>');
                redirect('LoginAdmin');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar </div>');
            redirect('LoginAdmin');
        }
    }

}
