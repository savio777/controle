<?php

class Tickets{

    private $id;
    private $titulo;
    private $descricao;
    private $criado;
    private $prioridade;

    public function __construct($titulo, $descricao, $criado,$prioridade){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->criado = $criado;
        $this->prioridade = $prioridade;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

}