<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

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
        $this->form_validation->set_rules('Email-mahasiswa', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Password-mahasiswa', 'Password', 'required');

        if($this->form_validation->run() == false){
            $data['title'] = 'Login';
		    $this->load->view('webadmin/loginadminsite', $data);
        }else{
            $this->_proseslogin();
        }
	}

    private function _proseslogin(){
        session_start();
        $email = $this->input->post('Email-mahasiswa');
        $password = $this->input->post('Password-mahasiswa');

        $mahasiswa = $this->db->get_where('mahasiswa', ['Email-mahasiswa' => $email])->row_array();
        if($mahasiswa) {
            if(password_verify($password, $mahasiswa['Password-mahasiswa'])) {
                $_SESSION['Nama-mahasiswa'] = $mahasiswa['Nama-mahasiswa'];
                $_SESSION['Email-mahasiswa'] = $mahasiswa['Email-mahasiswa'];
                

                redirect('dashboard');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah </div>');
                redirect('webadmin/loginadminsite');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar </div>');
            redirect('webadmin/loginadminsite');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('Nama-mahasiswa');
        $this->session->unset_userdata('Email-mahasiswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Akun telah logout</div>');
        redirect('login');

    }

}