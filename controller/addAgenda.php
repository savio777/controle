<?php

require_once '../crud/crudAgenda.php';
require_once '../models/agenda.php';

$crud = NULL;
$agenda = NULL;

if($_POST){
    $agenda = new Agenda($_POST['titulo'], $_POST['descricao'], $_POST['cor'], $_POST['cortexto'], $_POST['comeco'], $_POST['fim']);
    $crud = new CrudAgenda();

    $crud->adicionarAgenda($agenda);

    header('Location: ../pages/lista_agenda.php');
}else{
    echo('nenhuma requisição');
}