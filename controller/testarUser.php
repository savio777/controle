<?php

require_once '../crud/crudUser';
require_once '../models/usuario.php';

$crud = NULL;
$usuario = NULL;

if($_POST){
    $crud = new CrudUser();
    $usuario = new Usuario();

    // povoar os sets  de $usuario  com $POST[]
    $usuario->setNomeUser($_POST['usuario']);
    $usuario->setSenha($_POST['senha']);    

    // se $crud->testUserPainel der True
    if($crud->testUserPainel($usuario)){
        header('Location: ../pages/painel.html');
    }else{
        echo('<br><b>usuario ou senha incorretos</b><br>');
    }

    
}else{
    echo('nenhuma requisicão');
}