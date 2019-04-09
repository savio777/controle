<?php

class Usuario{

    private $id;
    private $nomeUser;
    private $senha;
    private $permissaoRoot;

    public function __construct($id, $nomeUser, $senha, $permissaoRoot){
        $this->id = $id;
        $this->nomeUser = $nomeUser;
        $this->senha = $senha;
        $this->permissaoRoot = $permissaoRoot;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNomeUser(){
        return $this->nomeUser;
    }

    public function setNomeUser($nomeUser){
        $this->nomeUser = $nomeUser;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getPermissaoRoot(){
        return $this->permissaoRoot;
    }

    public function setPermissaoRoot($permissaoRoot){
        $this->permissaoRoot;
    }

}