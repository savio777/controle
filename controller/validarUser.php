<?php

require_once '../crud/crudUser.php';

$crud = NULL;

session_start();

if($_POST){
    $crud = new CrudUser();

    $usuario = array(
        'nome' => $_POST['usuario'],
        'senha' => hash('sha1', $_POST['senha'])
    );

    $verificaUsuario = $crud->testUserPainel($usuario);
        
    if($verificaUsuario){
        foreach ($verificaUsuario as $i) {
            $_SESSION['usuario_logado'] = array(
                'nome' => $i['nome'],
                'email' => $i['email'],
                'tipo_user' => $i['tipo_user']
            );    
        }

        header('Location: ../pages/painel.php');
    }else{
        echo('<br><b>usuario ou senha incorretos</b><br>');
    }

    
}else{
    echo('nenhuma requisicão');
}
