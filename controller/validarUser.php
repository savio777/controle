<?php

require_once '../crud/crudUser.php';
require_once '../models/usuario.php';

$crud = NULL;
$usuario = NULL;

session_start();

if($_POST){
    $crud = new CrudUser();
    $usuario = new Usuario();

    // povoar os sets  de $usuario  com $POST[]
    $usuario->setNomeUser($_POST['usuario']);
    $usuario->setSenha($_POST['senha']);    

    // se $crud->testUserPainel der True
    if($crud->testUserPainel($usuario)){
        $_SESSION['usuario_logado'] = $usuario;

        header('Location: ../pages/painel.html');
    }else{
        echo('<br><b>usuario ou senha incorretos</b><br>');
    }

    
}else{
    echo('nenhuma requisicão');
}

// função para deslogar
if($_GET){
    unset($_SESSION['usuario_logado']);
}