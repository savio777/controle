<?php 

require_once '../crud/crudProduto.php'; 

$crud = new CrudProduto;

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
    <a href="../index.html"><input type="button" value="Voltar"></a><br><br>

    <table>
        <tr>
            <td><b>Id</b></td>
            <td><b>Produto</b></td>
            <td><b>Preço</b></td>
            <td><b>Quantidade</b></td>
            <td><b>Editar</b></td>
            <td><b>Apagar</b></td>
        </tr>
        <?php foreach($resultado as $i){ ?>
        <tr>
            <td > <?php echo($i['id']);?> </td>
            <td > <?php echo($i['nomeProduto']); ?></td>
            <td > <?php echo($i['preco']); ?></td>
            <td > <?php echo($i['quantidade']); ?></td>
            <!-- testes para apagar depois -->
            <!--<td> <?php ///echo("<a href='../controller/testeEditar.php?{$i['id']}'> <img src='../img/icons8-editar-16.png' </a>")  ?> </td>
            <!--<td> <?php //echo("<a href='../controller/crudControll.php?${i['id']}'> <img src='../img/icons8-editar-16.png' </a>")  ?> </td>
            <td> <?php //echo("<a href='#'> <img src='../img/icons8-excluir-16.png' </a>")  ?> </td>-->
            <!-- editar e apagar registro -->
            <td><a href="../controller/testeEditar.php?id=<?php echo($i['id']); ?>"> 
                <img src='../img/icons8-editar-16.png'> </a></td>
            <td><a href="../controller/testeExcluir.php?id=<?php echo($i['id']); ?>"> 
                <img src='../img/icons8-excluir-16.png'> </a></td>
        </tr>
        <?php } // fechamento do foreach ?>
    </table>

</body>
</html>