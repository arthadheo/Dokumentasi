<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{

    public function mahasiswa()
    {
        // $sql = "SELECT m.Nama_mahasiswa, m.NIM, m.Jurusan FROM `mahasiswa` as m WHERE m.Email_mahasiswa = 'dheo@universitaspertamina.ac.id'";
        // $result = $this->db->query($sql);
        // return $result;
        $query = $this->db->get('mahasiswa');
        return $query->result();

        // $this->db->select('mahasiswa.Nama_mahasiswa, mahasiswa.NIM, mahasiswa.Jurusan'); 
        // $this->db->where('mahasiswa.Email_mahasiswa', 'dheo@universitaspertamina.ac.id');
        // return $this->db->get('mahasiswa');
    }
}