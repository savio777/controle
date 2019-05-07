<?php

require_once('../crud/crudProduto.php'); 
require_once('../models/produto.php');

$produto = NULL;
$crud = NULL;

if($_POST){
    $produto = new Produto($_POST['nomeProduto'], $_POST['preco'], $_POST['quantidade']);
    $produto->setId($_POST['id']);

    $crud = new CrudProduto();
    $crud->editarProduto($produto);

    header('Location: ../pages/estoque.php');
}else{
    echo('nenhuma requisição');
}

