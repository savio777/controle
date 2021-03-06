<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>

    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="painel.php"><i
            class="small material-icons left">keyboard_arrow_left</i>Cancelar</a>
    <br><br>
    <div class="card-panel teal lighten-2">
        <h1>Cadastrar Produto</h1>
    </div>
    <br><br><br>
    <div class="row">
        <form class="col 12" action="../controller/addProduto.php" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input class="validate" name="nomeProduto" id="nomeProduto">
                    <label class="active" for="nomeProduto">Nome Produto</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <input name="preco" id="preco" class="validate">
                    <label for="preco" class="active">Preço R$</label>
                </div>
                <div class="input-field col s3">
                    <input id="quantidade" name="quantidade" type="number" class="validate">
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

</body>

</html>