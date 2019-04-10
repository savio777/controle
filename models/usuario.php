<?php

class Usuario{

    private $id;
    private $nomeUser;
    private $senha;
    private $permissaoRoot;

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