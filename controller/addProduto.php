<?php

require_once '../crud.php';

$crud = new Crud();
$produto = NULL;

if($_POST){
    // povoar os valores de $produto no construct com o $_POST[]
    $produto = new Produto();
    

    $crud->adicionarProduto($produto);
}else{
    echo('nenhuma requisição');
}
