<?php

class Agenda{

    private $id;
    private $titulo;
    private $descricao;
    private $cor;
    private $cortexto;
    private $comeco;
    private $fim;

    public function __construct($titulo, $descricao, $cor, $cortexto, $comeco, $fim){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->cor = $cor;
        $this->cortexto = $cortexto;
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