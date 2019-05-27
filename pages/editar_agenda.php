<?php
require_once '../crud/crudAgenda.php';

$crud = NULL;
$getAgenda = NULL;

if ($_GET) {
    $crud = new CrudAgenda;
    $getAgenda = $crud->retornarPorId($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Cadastrar Agenda</title>
</head>

<body>
    <?php foreach ($getAgenda as $i) { ?>
        <div class="row">
            <form class="col s6" action="../controller/editarAgenda.php" method="POST">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $i['id'] ?>">
                    <div class="input-field col s12">
                        <input id="nome" name="nome" value="<?php echo $i['nome'] ?>">
                        <label for="nome" class="active">Nome</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input id="numero" name="numero" type="number" value="<?php echo $i['numero'] ?>">
                            <label for="numero" class="active">Número</label>
                        </div>
                        <div class="input-field col s9">
                            <input id="rua" name="rua" value="<?php echo $i['rua'] ?>">
                            <label for="rua" class="active">Rua</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="bairro" name="bairro" value="<?php echo $i['bairro'] ?>">
                            <label for="bairro" class="active">Bairro</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="cep" name="cep" type="number" value="<?php echo $i['cep'] ?>">
                            <label for="cep" class="active">Cep</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="cidade" name="cidade" value="<?php echo $i['cidade'] ?>">
                            <label for="cidade" class="active">Cidade</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="estado" name="estado" value="<?php echo $i['estado'] ?>">
                            <label for="estado" class="active">Estado</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="pais" name="pais" value="<?php echo $i['pais'] ?>">
                        <label for="pais" class="active">País</label>
                    </div>
                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                            <i class="material-icons left">add</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    <?php } ?>
</body>

</html>