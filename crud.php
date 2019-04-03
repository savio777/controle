<?php 
require_once 'conexao.php';

class Crud{
    
    private $con = NULL;
    //private $id = NULL;

    public function __construct(){
        $this->con = getConexao();
        //($_GET) ? $this->id = $_GET['id'] : $this->id = NULL; 
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