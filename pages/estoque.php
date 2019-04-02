<?php 
require_once '../crud.php'; 

$crud = new Crud;

// consertar a impressão do array e imprimir tags da tabela
$resultado = $crud->lerTodoEstoque();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Estoque</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <table>
        <tr>
            <td><b>Id</b></td>
            <td><b>Produto</b></td>
            <td><b>Preço</b></td>
            <td><b>Quantidade</b></td>
        </tr>
        <?php foreach($resultado as $i){ ?>
        <tr>
            <td> <?php echo($i['id']);?> </td>
            <td> <?php echo($i['nomeProduto']); ?></td>
            <td> <?php echo($i['preco']); ?></td>
            <td> <?php echo($i['quantidade']); ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>