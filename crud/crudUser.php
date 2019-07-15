<?php

require_once '../con/conexao.php';
require_once '../models/usuario.php';

class CrudUser{

    private $con = NULL;

    public function __construct(){
        $this->con = getConexao();
    }

    // testar se usuario existe para painel
    public function testUserPainel($usuario){
        try{
            $sql = 'SELECT * FROM usuario WHERE nome = ? AND senha = ?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindValue(1, $usuario['nome']);
            $pstm->bindValue(2, $usuario['senha']);
            $pstm->execute();

            $resultado = $pstm->fetchAll();

            return $resultado;
        }catch(PDOException $erro){
            echo($erro->getMessage());
        }
    }

    // testar se usuario tem permissão root
    public function testUserRoot(Usuario $usuario){
        try {
            $sql = '';

        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }


    public function addUser(Usuario $usuario){
        try {
            $sql = '';


        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function removerUser($id){
        try {
            $sql = '';


        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function editarUser(Usuario $usuario){
        try {
            $sql = '';


        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }


}