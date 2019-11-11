<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    public function index()
    {
        echo 'iae';
    }

    public function login()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'senha' => hash('sha1', $this->input->post('senha'))
        );
        $response = $this->Usuario_model->login($data);
        if (empty($response[0]->nome)) {
            echo 'erro login';
        } else {
            header('Location: ../home');
        }
    }
}
