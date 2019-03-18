<?php

require_once './conexao.php';

$con = getConexao();

// CREATE
/*
$sqlCreate = 'INSERT INTO estoque (nomeProduto, preco, quantidade) VALUES (?,?,?)';

$nomeProduto = 'test1';
$preco = 10.5;
$quantidade = 2;

$preparedStmt = $con->prepare($sqlCreate);
$preparedStmt->bindParam(1, $nomeProduto);
$preparedStmt->bindParam(2, $preco);
$preparedStmt->bindParam(3, $quantidade);

try{
    $preparedStmt->execute();

    echo 'deu certo';
}catch(PDOExeption $error){
    echo "Erro: ".$error->getMessage();
}
*/

// READALL
/*
$sqlRead = 'SELECT * FROM estoque';

$preparedStmt1 = $con->prepare($sqlRead);

try{
    $preparedStmt1->execute();

    $result = $preparedStmt1->fetchAll();

    //var_dump($result);
    foreach($result as $i){
        echo $i['nomeProduto'].', '.$i['preco'].', '.$i['quantidade'].'<br>';
    }
}catch(PDOException $error){
    echo "Erro: ".$error->getMessage();
}
*/

// READ ESPECIFICO
/*
$sql = 'SELECT * FROM estoque WHERE id=?';

$id = 2; # ID que quero imprimir

$preparedStmt2 = $con->prepare($sql);
$preparedStmt2->bindValue(1, $id);  

try{
    $preparedStmt2->execute();

    $result = $preparedStmt2->fetchAll();

    foreach($result as $i){
        echo $i['nomeProduto'].', '.$i['preco'].', '.$i['quantidade'].'<br>';
    }
}catch(PDOException $error){
    echo 'Erro: '.$error->getMessage();
}
*/

// UPDATE
/*
$sql = 'UPDATE estoque SET nomeProduto=?, preco=?, quantidade=? WHERE id=?';

$id = 4;
$nomeProduto = 'pc da xuxa';
$preco = 15.75;
$quantidade = 4;

$preparedStmt3 = $con->prepare($sql);

$preparedStmt3->bindParam(1, $nomeProduto);
$preparedStmt3->bindParam(2, $preco);
$preparedStmt3->bindParam(3, $quantidade);
$preparedStmt3->bindParam(4, $id);

try{
    $preparedStmt3->execute();

    echo 'atualizado';
}catch(PDOException $erro){
    echo "Erro: ".$erro->getMessage();
}
*/

// DELETE

$sql = 'DELETE FROM estoque WHERE id = ?';

$id = 1;

$preparedStmt4 = $con->prepare($sql);
$preparedStmt4->bindParam(1, $id);

try {
    $preparedStmt4->execute();

    echo 'ID: '.$id.' excluido com sucesso';
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}