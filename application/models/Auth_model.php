<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model
{
	private $_table = "user";
	const SESSION_KEY = 'user_id';

	public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		$this->_update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

        $user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id])->row();

        if ($query->level == 1) {
            $query1 = $this->db->select('*')
                              ->from($this->_table)
                              ->join('mahasiswa','user.id=mahasiswa.user_id')
                              ->where('user.id',$user_id)
                              ->get();
        }elseif ($query->level == 2) {
            $query1 = $this->db->select('*')
                              ->from($this->_table)
                              ->join('admin','user.id=admin.user_id')
                              ->where('user.id',$user_id)
                              ->get();
        }elseif ($query->level == 3) {
            $query1 = $this->db->select('*')
                              ->from($this->_table)
                              ->join('dosen','user.id=dosen.user_id')
                              ->where('user.id',$user_id)
                              ->get();
        }
        
		return $query1->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}
}