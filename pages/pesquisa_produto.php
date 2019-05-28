<?php

require_once '../crud/crudProduto.php';

$crud = NULL;
$data = NULL;

// pega arquivo para a variavel
if (!(isset($_GET['pesquisar']))) {
    echo "<h1>Produto não existe!</h1>";    
}else{
    $crud = new CrudProduto();

    $data = $crud->pesquisar($_GET['pesquisar']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Pesquisar Produto</title>
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="estoque.php"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a><br><br>
    
    <table class="highlight">
        <tr>
            <td><b>Id</b></td>
            <td><b>Produto</b></td>
            <td><b>Preço</b></td>
            <td><b>Quantidade</b></td>
            <td><b>Editar</b></td>
            <td><b>Apagar</b></td>
        </tr>
        <?php if ($data != NULL) {
            foreach ($data as $i) { ?>
                <tr>
                    <td name="id"> <?php if ($data != NULL) {echo $i['id'];} ?> </td>
                    <td name="nomeProduto"> <?php if ($data != NULL) { echo $i['nomeProduto']; }?></td>
                    <td name="preco"> <?php if ($data != NULL) { echo $i['preco']; }?></td>
                    <td name="quantidade"> <?php if ($data != NULL) { echo $i['quantidade']; }?></td>
                    <!-- editar e apagar registro -->
                    <td><a href="../pages/editarproduto.php?id=<?php if ($data != NULL) { echo $i['id']; }?>">
                        <i class="small material-icons">create</i></a></td>
                    <td><a href="../controller/testeExcluir.php?id=<?php if ($data != NULL) { echo $i['id']; } ?>">
                        <i class="small material-icons">delete</i></a></td>
                </tr>
            <?php }
    }
    ?>
    </table>

</body>

</html>