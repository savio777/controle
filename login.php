<?php

require_once './conexao.php';

$con = getConexao();

$sql = 'SELECT * FROM usuario WHERE nomeUser = ? AND senha = ?';

if($_POST){
    try {
        //echo(var_dump($_POST));

        $pstm = $con->prepare($sql);
        $pstm->bindValue(1, $_POST['usuario']);
        $pstm->bindValue(2, $_POST['senha']);
        $pstm->execute();
        $result = $pstm->fetchAll();

        //echo(var_dump($result));

        if($result){
            header('Location: pages/estoque.html');
        }else{
            echo('<br><b>usuario ou senha incorretos</b><br>');
        }
    } catch (PDOException $erro) {
        echo($erro->getMessage());
    }
}else{
    echo(var_dump($_POST));
}