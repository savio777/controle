<?php

class Agenda{

    private $id;
    private $titulo;
    private $cor;
    private $comeco;
    private $fim;

    public function __construct($titulo, $cor, $comeco, $fim){
        $this->titulo = $titulo;
        $this->cor = $cor;
        $this->comeco = $comeco;
        $this->fim = $fim;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

}