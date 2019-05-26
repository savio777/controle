<?php

require_once '../con/conexao.php';
require_once '../models/agenda.php';

class CrudProduto{
    
    private $con = NULL;
    //private $produto = NULL;

    public function __construct(){
        $this->con = getConexao();
        //$this->produto = new Produto();
    }

    // funções do banco de dados da agenda

}