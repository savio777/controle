<?php 
require_once 'conexao.php';
require_once '../models/produto.php';

class Crud{
    
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
            $resultado = $pstm->fetchAll();

            return $resultado;
        } catch (PDOException $err) {
            $erro['erro'] = $err->getMessage(); 
            return $erro;
        }
    }

    // adicionar registros
    public function adicionarProduto(Produto $produto){
        try {
            $sql = '';
        } catch (PDOException $erro) {
            echo($erro->getMessage());
        }
    }


    // editar registros


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