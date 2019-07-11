<?php

require_once '../crud/crudAgenda.php';

if($_GET){
    $crud = new CrudAgenda();

    $crud->apagarAgenda($_GET['id']);
    
    header('Location: ../pages/lista_agenda.php');
}else{
    echo('nenhuma requisição');
}
