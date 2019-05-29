<?php

require_once '../crud/crudProduto.php';

$crud = new CrudProduto();

if($_GET){
    $crud->apagarProduto($_GET['id']);
    
    header('Location: ../pages/lista_produto.php');
}else{
    echo('nenhuma requisição');
}