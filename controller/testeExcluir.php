<?php

require_once '../crud.php';

$crud = new Crud();

if($_GET){
    $crud->apagarProduto($_GET['id']);
    header('Location: ../pages/estoque.php');
}else{
    echo('nenhuma requisição');
}