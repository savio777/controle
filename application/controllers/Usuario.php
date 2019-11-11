<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Usuario_model');
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
            $this->session->set_userdata('id',  $response[0]->id);
            $this->session->set_userdata('nome',  $response[0]->nome);
            $this->session->set_userdata('email',  $response[0]->email);


            header('Location: ../home');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nome');
        $this->session->unset_userdata('email');
        header('Location: ../../');
    }
}
