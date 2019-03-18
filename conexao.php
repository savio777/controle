<?php

/** documentação
 * 
 * @return \PDO
 */

# constantes para guardar parametros da conexão com o BD
define('DSN', 'mysql:host=localhost;dbname=estoque;charset=utf8');
define('USER', 'root');
define('SENHA', '');

function getConexao(){
    try{
        $conexao = new PDO(DSN, USER, SENHA, NULL);
        
        return $conexao;
        //echo "teste de conexão";
    }catch(PDOException $error){
        echo "Erro: ".$error->getMessage();
    }
}

