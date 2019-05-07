<?php

class Produto{

    private $id;
    private $nomeProduto;
    private $preco;
    private $quantidade;

    public function __construct($nomeProduto, $preco, $quantidade){
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNomeProduto(){
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto){
        $this->nomeProduto = $nomeProduto;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

}