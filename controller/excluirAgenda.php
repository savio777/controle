<?php

require_once '../crud/crudAgenda.php';

$crud = new CrudProduto();

if($_GET){
    $crud->apagarProduto($_GET['id']);
    
    header('Location: ../pages/lista_agenda.php');
}else{
    echo('nenhuma requisição');
}