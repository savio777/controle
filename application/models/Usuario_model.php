<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function login($data)
    {
        $sql = 'SELECT id, nome, email FROM usuario WHERE email = ? AND senha = ?';
        $response = $this->db->query($sql, array($data['email'], $data['senha']));
        return $response->result();
    }
}
