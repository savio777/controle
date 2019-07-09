<?php

require_once '../crud/crudTicket.php';
require_once '../models/tickets.php';

$crud = NULL;
$ticket = NULL;

if($_POST){
    $crud = new CrudTicket();
    $ticket = new Tickets($_POST['titulo'], $_POST['descricao'], $_POST['criado'], $_POST['prioridade']);
    
    $crud->adicionarTicket($ticket);   
    
    header('Location: ../pages/lista_tickets.php');
}else{
    echo('nenhuma requisição');
}
