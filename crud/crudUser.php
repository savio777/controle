<?php

require_once '../con/conexao.php';
require_once '../models/usuario.php';

class CrudUser{

    private $con = NULL;

    public function __construct(){
        $this->con = getConexao();
    }

    // testar se usuario existe para painel
    public function testUserPainel(Usuario $usuario){
        try{
            $sql = 'SELECT * FROM usuario WHERE nomeUser = ? AND senha = ?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindValue(1, $usuario->getNomeUser());
            $pstm->bindValue(2, $usuario->getSenha());
            $pstm->execute();

            if($pstm->fetchAll()){
                return True;
            }else{
                return False;
            }
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