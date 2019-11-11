<?php

require_once '../crud/crudAgenda.php';
require_once '../models/agenda.php';

$crud = NULL;
$agenda = NULL;

if ($_GET) {
    $crud = new CrudAgenda();
    $getAgenda = $crud->retornarPorId($_GET['id']);
} else {
    echo ('ERRO');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="lista_agenda.php">
        <i class="small material-icons left">keyboard_arrow_left</i>Cancelar</a>
    <br><br>
    <div class="card-panel teal lighten-2">
        <h2>Editar Agenda</h2>
    </div>

    <br><br>

    <div class="container">
        <div class="row">
            <form class="col s12" method="POST" action="../controller/editarAgenda.php">
                <input type="hidden" name="id" value="<?php echo($getAgenda->id) ?>">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="titulo" name="titulo" value="<?php echo ($getAgenda->titulo) ?>">
                        <label class="active" for="titulo">Título</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="descricao" name="descricao" class="materialize-textarea"><?php echo ($getAgenda->descricao) ?></textarea>
                        <!--<input id="descricao" name="descricao">-->
                        <label class="active" for="descricao">Descricão</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <br><input type="color" id="cor" name="cor" value="<?php echo ($getAgenda->cor) ?>">
                        <label class="active" for="cor">Cor</label>
                    </div>
                    <div class="input-field col s6">
                        <br><input type="color" id="cortexto" name="cortexto" value="<?php echo ($getAgenda->cortexto) ?>">
                        <label class="active" for="cortexto">Cor texto</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light"><i class="material-icons left">save</i>salvar</button>
            </form>
        </div>
    </div>

</body>

</html>