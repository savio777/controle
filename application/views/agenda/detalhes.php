<?php
require_once '../crud/crudAgenda.php';

$resultado = NULL;

if ($_GET['id']) {
    $crud = new CrudAgenda();

    $resultado = $crud->retornarPorId($_GET['id']);
} else {
    echo ('<h1>nenhuma requisição</h1>');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Evento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        h1 {
            color: <?php echo ($resultado->cortexto) ?>;
            background-color: <?php echo ($resultado->cor) ?>;

        }
    </style>
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="lista_agenda.php">
        <i class="small material-icons left">keyboard_arrow_left</i>Voltar</a>
    <!-- botão para excluir ticket -->
    <a class="waves-effect waves-light btn" href="../controller/excluirAgenda.php?id=<?php echo ($_GET['id']) ?>">
        <i class="small material-icons left">done</i>Feito</a>
    <!-- botão para editar ticket -->
    <a class="waves-effect waves-light btn" href="../pages/editar_agenda.php?id=<?php echo ($_GET['id']) ?>">
        <i class="small material-icons left">edit</i>editar</a>

    <h1>Detalhes do Evento</h1>

    <div class="container">
        <div class="divider"></div>
        <div class="section">
            <h5>Título</h5>
            <p><b><?php echo ($resultado->titulo) ?></b></p>
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Descriçao</h5>
            <p><?php echo ($resultado->descricao) ?></p>
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Começo do Evento</h5>
            <p><?php echo ($resultado->comeco) ?></p>
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Fim do Evento</h5>
            <p><?php echo ($resultado->fim) ?></p>
        </div>
    </div>
    </div>
</body>

</html>