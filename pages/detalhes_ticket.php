<?php
include_once '../crud/crudTicket.php';


if ($_GET['id']) {
    $crud = new CrudTicket();

    $resultado = $crud->retornarPorId($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="lista_tickets.php"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a>
    <!-- botão para cadastrar tickets -->
    <a class="waves-effect waves-light btn" href="../controller/excluirTicket.php?id=<?php echo($_GET['id'])?>">
        <i class="small material-icons left">done</i>Feito</a>

    <h1 class="card-panel  blue lighten-2">Descrição do Ticket</h1>
    <div class="container">
        <div class="divider"></div>
        <div class="section">
            <h3>Título</h3>
            <p><b><?php echo ($resultado->titulo) ?></b></p>
        </div>

        <div class="divider"></div>
        <div class="section">
            <h5>Descrição</h5>
            <p><?php echo ($resultado->descricao) ?></p>
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Criado</h5>
            <p><?php echo ($resultado->criado) ?></p>
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Nível Prioridade</h5>
            <p><?php echo ($resultado->prioridade) ?></p>
        </div>
    </div>

</body>

</html>