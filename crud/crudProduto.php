<?php 
require_once '../con/conexao.php';
require_once '../models/produto.php';

class CrudProduto{
    
    private $con = NULL;
    //private $produto = NULL;

    public function __construct(){
        $this->con = getConexao();
        //$this->produto = new Produto();
    }

    // ler todos os valores do estoque
    public function lerTodoEstoque(){
        try {
            $sql = 'SELECT * FROM estoque';
        
            $pstm = $this->con->prepare($sql);
            $pstm->execute();
            //$resultado = $pstm->fetchAll();

            return $pstm->fetchAll();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    // retornar produto pelo valor do id
    public function retornarPorId($id){
        try{
            $sql = 'SELECT * FROM estoque WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);
            $pstm->execute();

            return $pstm->fetchAll();
        }catch(PDOException $erro){
            echo($erro->getMessage());
        }
    }

    // adicionar registros
    public function adicionarProduto(Produto $produto){
        try {
            $sql = 'INSERT INTO estoque (nomeProduto, preco, quantidade) VALUES (?,?,?)';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $produto->getNomeProduto());
            $pstm->bindParam(2, $produto->getPreco());
            $pstm->bindParam(3, $produto->getQuantidade());

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }


    // editar registros
    public function editarProduto(Produto $produto){
        try {
            // pesquisar update mysql
            $sql = 'UPDATE estoque SET nomeProduto=?, preco=?, quantidade=? WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindValue(1, $produto->getNomeProduto());
            $pstm->bindValue(2, $produto->getPreco());
            $pstm->bindValue(3, $produto->getQuantidade());
            $pstm->bindValue(4, $produto->getId());

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }

    // apagar registros
    public function apagarProduto($id){
        try {
            $sql = 'DELETE FROM estoque WHERE id=?';

            $pstm = $this->con->prepare($sql);
            $pstm->bindParam(1, $id);

            $pstm->execute();
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }
    
}


?>