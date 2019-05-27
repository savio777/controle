<?php

class Agenda{

    private $id;
    private $nome;
    private $numero;
    private $rua;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $pais;

    // construtor para popular atributos
    public function __construct($nome, $numero, $rua, $bairro, $cep, $cidade, $estado, $pais){
        $this->nome = $nome;
        $this->numero = $numero;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais; 
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setRua($rua){
        $this->rua = $rua;
    }

    public function getRua(){
        return $this->rua;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setPais($pais){
        $this->pais = $pais;
    }

    public function getPais(){
        return $this->pais;
    }
}