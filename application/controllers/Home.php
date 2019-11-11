<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Agenda_model');
        $this->load->model('Tickets_model');
    }

    public function index()
    {
        $data = array(
            'tickets' => $this->Tickets_model->pegar(),
            'agenda' => $this->Agenda_model->pegar(),
            'usuario' => $this->session
        );
        $this->load->view('painel', $data);
    }
}
