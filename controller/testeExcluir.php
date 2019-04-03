<?php

require_once '../crud';

$crud = new Crud();

if($_GET){
    $crud->apagarProduto($_GET['id']);
}else{
    echo('nenhuma requisição');
}