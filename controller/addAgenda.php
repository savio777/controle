<?php

require_once '../crud/crudAgenda.php';
require_once '../models/agenda.php';

$crud = NULL;
$agenda = NULL;

if($_POST){
    $agenda = new Agenda($_POST['nome'], $_POST['numero'], $_POST['rua'], $_POST['bairro'],
        $_POST['cep'], $_POST['cidade'], $_POST['estado'], $_POST['pais']);

    $crud = new CrudAgenda();
    $crud->adicionarAgenda($agenda);

    header('Location: ../pages/lista_agenda.php');
}else{
    echo('nenhuma requisição');
}