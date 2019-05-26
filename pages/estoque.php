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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="painel.html"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a><br><br>
    <!-- pesquisar -->
    <div class="row">
        <form class="col s6" action="../pages/pesquisarProduto.php" method="GET">
            <div class="row">
                <div class="input-field col s6">
                    <input class="validate" id="pesquisar" name="pesquisar">
                    <label for="pesquisar" class="active">Nome Produto</label>
                </div>
                <div class="input-field col s6">                
                    <button class="btn waves-effect waves-light" type="submit" name="action">Pesquisar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br><br>
    <!-- imprimir produtos -->
    <table class="highlight">
        <thead>
            <tr>
                <td><b>Id</b></td>
                <td><b>Produto</b></td>
                <td><b>Preço</b></td>
                <td><b>Quantidade</b></td>
                <td><b>Editar</b></td>
                <td><b>Apagar</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $i) { ?>
                <tr>
                    <td name="id"> <?php echo ($i['id']); ?> </td>
                    <td name="nomeProduto"> <?php echo ($i['nomeProduto']); ?></td>
                    <td name="preco"> <?php echo ($i['preco']); ?></td>
                    <td name="quantidade"> <?php echo ($i['quantidade']); ?></td>
                    <!-- editar e apagar registro -->
                    <td><a href="../pages/editarproduto.php?id=<?php echo ($i['id']); ?>">
                            <i class="small material-icons">create</i></a></td>
                    <td><a href="../controller/testeExcluir.php?id=<?php echo ($i['id']); ?>">
                            <i class="small material-icons">delete</i></a></td>
                </tr>
            <?php }
        ?>
        </tbody>
    </table>

</body>

</html>