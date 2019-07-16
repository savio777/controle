<?php

require_once('../crud/crudAgenda.php');
require_once('../models/agenda.php');

$produto = NULL;
$crud = NULL;

if ($_POST) {
    $agenda = new Agenda(
        $_POST['titulo'],
        $_POST['descricao'],
        $_POST['cor'],
        $_POST['cortexto'],
        NULL,
        NULL
    );

    $agenda->__set('id', $_POST['id']);

    $crud = new CrudAgenda();
    $crud->editarAgenda($agenda);

    header('Location: ../pages/lista_agenda.php');
} else {
    echo ('nenhuma requisição');
}
