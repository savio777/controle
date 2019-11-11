<?php

class Agenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
    }

    // telas

    public function index()
    {
        $data = $this->Agenda_model->pegar();
        $this->load->view('agenda/lista', array('resultado' => $data));
    }

    public function adicionar()
    {
        $this->load->view('agenda/adicionar');
    }

    public function detalhes($id)
    {
        $data = $this->Agenda_model->pegarId($id);
        $this->load->view('agenda/detalhe', array('resultado' => $data));
    }

    // banco de dados

    public function cadastrar()
    {
        $this->Agenda_model->inserir($this->input->post());
        $this->index();
    }
}
