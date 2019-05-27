<?php

require_once('../crud/crudAgenda.php');
require_once('../models/agenda.php');

$produto = NULL;
$crud = NULL;

if ($_POST) {
    $agenda = new Agenda(
        $_POST['nome'],
        $_POST['numero'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cep'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['pais']
    );
    $agenda->setId($_POST['id']);

    $crud = new CrudAgenda();
    $crud->editarAgenda($agenda);

    header('Location: ../pages/lista_agenda.php');
}else{
    echo ('nenhuma requisição');
}
