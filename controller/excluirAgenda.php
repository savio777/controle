<?php

require_once '../crud/crudAgenda.php';

$crud = new CrudAgenda();

if($_GET){
    $crud->apagarAgenda($_GET['id']);
    
    header('Location: ../pages/lista_agenda.php');
}else{
    echo('nenhuma requisição');
}