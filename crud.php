<?php 
require_once 'conexao.php';

class Crud{
    
    private $con = NULL;

    public function __construct(){
        $this->con = getConexao();
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
    
    
}


?>