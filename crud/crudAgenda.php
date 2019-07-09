<?php

require_once '../models/agenda.php';
require_once '../con/conexao.php';

class CrudAgenda{

    private $con;

    public function __construct(){
        $this->con = getConexao();
    }

    public function lerTodaAgenda(){
        try {
            $sql = 'SELECT * FROM agenda';

            $pstm = $this->con->prepare($sql);
            $pstm->execute();

            return $pstm->fetchAll();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function retornarPorId($id){
        try{
            $sql = 'SELECT * FROM agenda WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);
            $pstm->execute();

            return $pstm->fetchAll();
        }catch(PDOException $erro){
            echo($erro->getMessage());
        }
    }

    public function adicionarAgenda(Agenda $agenda){
        try {
            $sql = 'INSERT INTO agenda (titulo, cor, comeco, fim) VALUES (?, ?, ?, ?)';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $agenda->__get('titulo'));
            $pstm->bindParam(2, $agenda->__get('cor'));
            $pstm->bindParam(3, $agenda->__get('comeco'));
            $pstm->bindParam(4, $agenda->__get('fim'));

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function editarAgenda(Agenda $agenda){
        try {
            $sql = 'UPDATE agenda SET titulo=?, cor=?, comeco=?, fim=? WHERE id=?';

            $pstm = $this->con->prepare($sql);

            $pstm->bindParam(1, $agenda->__get('titulo'));
            $pstm->bindParam(2, $agenda->__get('cor'));
            $pstm->bindParam(3, $agenda->__get('comeco'));
            $pstm->bindParam(4, $agenda->__get('fim'));
            $pstm->bindParam(5, $agenda->__get('id'));

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function apagarTicket($id){
        try {
            $sql = 'DELETE FROM agenda WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

}