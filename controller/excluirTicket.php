<?php

require_once '../crud/crudTicket.php';

if($_GET){
    $crud = new CrudTicket();

    $crud->apagarTicket($_GET['id']);

    header('Location: ../pages/lista_tickets.php');
}else {
    echo('nenhuma requisição');
}
