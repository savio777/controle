<?php

require_once '../con/conexao.php';
require_once '../models/tickets.php';

class CrudTicket{

    private $con = NULL;

    public function __construct(){
        $this->con = getConexao();
    }

    public function lerTodosTickets(){
        try {
            $sql = 'SELECT * FROM tickets';

            $pstm = $this->con->prepare($sql);
            $pstm->execute();

            return $pstm->fetchAll();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function retornarPorId($id){
        try {
            $sql = 'SELECT * FROM tickets WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);
            $pstm->execute();

            return $pstm->fetchObject();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function adicionarTicket(Tickets $ticket){
        try {
            $sql = 'INSERT INTO tickets (titulo, descricao, criado, prioridade) VALUES (?, ?, ?, ?)';

            $pstm = $this->con->prepare($sql);

            $pstm->bindParam(1, $ticket->__get('titulo'));
            $pstm->bindParam(2, $ticket->__get('descricao'));
            $pstm->bindParam(3, $ticket->__get('criado'));
            $pstm->bindParam(4, $ticket->__get('prioridade'));

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function editarTicket(Tickets $ticket){
        try {
            $sql = 'UPDATE tickets SET titulo=?, descricao=?, criado=?, prioridade=? WHERE id=?';

            $pstm = $this->con->prepare($sql);

            $pstm->bindParam(1, $ticket->__get('titulo'));
            $pstm->bindParam(2, $ticket->__get('descricao'));
            $pstm->bindParam(3, $ticket->__get('criado'));
            $pstm->bindParam(4, $ticket->__get('prioridade'));
            $pstm->bindParam(5, $ticket->__get('id'));

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    public function apagarTicket($id){
        try {
            $sql = 'DELETE FROM tickets WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

}
