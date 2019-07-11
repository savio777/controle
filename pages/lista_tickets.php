<?php

require_once '../crud/crudTicket.php';

$crud = new CrudTicket();

$resultado = $crud->lerTodosTickets();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="painel.html"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a>
    <!-- botão para cadastrar tickets -->
    <a class="waves-effect waves-light btn" href="cadastrar_tickets.html"><i class="small material-icons left">add</i>Adicionar Tickets</a>

    <br><br><br>

    <div class="row">
        <?php foreach ($resultado as $i) { ?>
            <?php if ($i['prioridade'] == 1) { ?>
                <div class="col s12 m2">
                    <div class="card purple darken-4">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo ($i['titulo']) ?></span>
                            <p><?php echo ($i['descricao']) ?></p>
                            <p><?php echo ($i['criado']) ?></p>
                        </div>
                        <div class="card-action">
                            <a href="../controller/excluirTicket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">done</i></a>
                            <a href="detalhesTicket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">remove_red_eye</i></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>

    <br>

    <div class="row">
        <?php foreach ($resultado as $i) { ?>
            <?php if ($i['prioridade'] == 2) { ?>
                <div class="col s12 m2">
                    <div class="card blue darken-4">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo ($i['titulo']) ?></span>
                            <p><?php echo ($i['descricao']) ?></p>
                            <p><?php echo ($i['criado']) ?></p>
                        </div>
                        <div class="card-action">
                            <a href="../controller/excluirTicket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">done</i></a>
                            <a href="detalhesTicket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">remove_red_eye</i></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>

    <br>

    <div class="row">
        <?php foreach ($resultado as $i) { ?>
            <?php if ($i['prioridade'] == 3) { ?>
                <div class="col s12 m2">
                    <div class="card light-blue accent-1">
                        <div class="card-content black-text">
                            <span class="card-title"><?php echo ($i['titulo']) ?></span>
                            <p><?php echo ($i['descricao']) ?></p>
                            <p><?php echo ($i['criado']) ?></p>
                        </div>
                        <div class="card-action">
                            <a href="../controller/excluirTicket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">done</i></a>
                            <a href="detalhesTicket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">remove_red_eye</i></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>


</body>

</html>