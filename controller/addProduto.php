<?php

require_once '../crud/crudProduto.php';
require_once '../models/produto.php';

$crud = NULL;
$produto = NULL;

if($_POST){
    // povoar os valores de $produto no construct com o $_POST[]
    $produto = new Produto($_POST['nomeProduto'], $_POST['preco'], $_POST['quantidade']);
    $crud = new CrudProduto();


    $crud->adicionarProduto($produto);

    header('Location: ../pages/lista_produto.php');
}else{
    echo('nenhuma requisição');
}
