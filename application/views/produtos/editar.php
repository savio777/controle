<?php
require_once('../crud/crudProduto.php');

$crud = NULL;
$getProduto = NULL;

if ($_GET) {
    $crud = new CrudProduto();
    $getProduto = $crud->retornarPorId($_GET['id']);
}else{
    echo('ERRO');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    <a class="waves-effect waves-light btn" href="painel.php"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a><br><br>

    <div class="card-panel teal lighten-2">
        <h1>Cadastrar Produto</h1>
    </div>

    <br><br><br>

    <?php foreach ($getProduto as $i) { ?>
        <!-- botão voltar -->

        <div class="row">
            <form class="col 12" action="../controller/editarProduto.php" method="POST">
                <div class="row">
                    <input type="hidden" value="<?php echo ($i['id']) ?>" name="id">
                    <div class="input-field col s6">
                        <input class="validate" name="nomeProduto" value="<?php echo ($i['nomeProduto']) ?>" id="nomeProduto">
                        <label class="active" for="nomeProduto">Nome Produto</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <input name="preco" id="preco" value="<?php echo ($i['preco']) ?>" class="validate">
                        <label for="preco" class="active">Preço R$</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="quantidade" name="quantidade" value="<?php echo ($i['quantidade']) ?>" type="number" class="validate">
                        <label for="quantidade" class="active">Quantidade</label>
                    </div>
                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                            <i class="material-icons left">add</i>
                        </button>
                    </div>
                </div>
        </div>
        </form>
        </div>


    <?php } ?>
</body>

</html>