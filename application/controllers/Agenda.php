<?php

defined('BASEPATH') or exit('No direct script access allowed');

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

    public function editar($id)
    {
        $data = $this->Agenda_model->pegarId($id);
        $this->load->view('agenda/editar', array('resultado' => $data));
    }

    // banco de dados

    public function cadastrar()
    {
        $this->Agenda_model->inserir($this->input->post());
        header('Location: ../agenda');
    }

    public function feito($id)
    {
        $this->Agenda_model->remover($id);
        header('Location: ../../agenda');
    }

    public function editar_evento()
    {
        $this->Agenda_model->editar($this->input->post());
        header('Location: ../../index.php/agenda');
    }

}
