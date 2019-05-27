<?php

require_once '../con/conexao.php';
require_once '../models/agenda.php';

class CrudAgenda{
    
    private $con = NULL;

    public function __construct(){
        $this->con = getConexao();
        //$this->produto = new Produto();
    }

    public function lerTodos(){
        try {
            $sql = 'SELECT * FROM agenda';
        
            $pstm = $this->con->prepare($sql);
            $pstm->execute();
            //$resultado = $pstm->fetchAll();

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
            $sql = 'INSERT INTO agenda (nome, numero, rua, bairro, cep, cidade, estado, pais) 
            VALUES (?,?,?,?,?,?,?,?)';

            $pstm = $this->con->prepare($sql);
            $pstm->bindValue(1, $agenda->getNome());
            $pstm->bindValue(2, $agenda->getNumero());
            $pstm->bindValue(3, $agenda->getRua());
            $pstm->bindValue(4, $agenda->getBairro());
            $pstm->bindValue(5, $agenda->getCep());
            $pstm->bindValue(6, $agenda->getCidade());
            $pstm->bindValue(7, $agenda->getEstado());
            $pstm->bindValue(8, $agenda->getPais());

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function editarAgenda(Agenda $agenda){
        try {
            // pesquisar update mysql
            $sql = 'UPDATE agenda SET nome=?, numero=?, rua=?, bairro=?, cep=?, cidade=?, estado=?, pais=?
            WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $agenda->getNome());
            $pstm->bindParam(2, $agenda->getNumero());
            $pstm->bindParam(3, $agenda->getRua());
            $pstm->bindParam(4, $agenda->getBairro());
            $pstm->bindParam(5, $agenda->getCep());
            $pstm->bindParam(6, $agenda->getCidade());
            $pstm->bindParam(7, $agenda->getEstado());
            $pstm->bindParam(8, $agenda->getPais());
            $pstm->bindParam(9, $agenda->getId());

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function apagarAgenda($id){
        try {
            $sql = 'DELETE FROM agenda WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function pesquisar($nome){
        try{
            // variavel criada para o PDO entender que a % faz parte do bind
            $str = "%{$nome}%";

            $sql = "SELECT * FROM agenda WHERE nome LIKE ?";

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $str);

            $pstm->execute();
            return $pstm->fetchAll();
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }
}