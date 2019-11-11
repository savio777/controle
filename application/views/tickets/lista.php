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
    <style>
        h6 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <div class="container">
                <ul class="right hide-on-med-and-down">
                    <!-- botão voltar -->
                    <li><a href="painel.php"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a></li>
                    <!-- botão para cadastrar tickets -->
                    <li><a href="cadastrar_tickets.html"><i class="small material-icons left">add</i>Adicionar</a></li>
                    <!-- botão link para prioridade máxima -->
                    <li><a href="#1"><i class="small material-icons left">looks_one</i>Prioridade Máxima</a></li>
                    <!-- botão link para prioridade média -->
                    <li><a href="#2"><i class="small material-icons left">looks_two</i>Prioridade Média</a></li>
                    <!-- botão link para prioridade mínima -->
                    <li><a href="#3"><i class="small material-icons left">looks_3</i>Prioridade Mínima</a></li>
                </div>
            </div>
        </nav>
    </div>

    <br><br><br>

    <div class="card-panel blue-grey darken-1">
        <h6 id="1">Prioridade Máxima 1</h6>
    </div>

    <br>

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
                            <a href="detalhes_ticket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">remove_red_eye</i></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>

    <br><br>

    <div class="card-panel blue-grey darken-1">
        <h6 id="2">Prioridade Média 2</h6>
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
                            <a href="detalhes_ticket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">remove_red_eye</i></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>

    <br><br>

    <div class="card-panel blue-grey darken-1">
        <h6 id="3">Prioridade Mínima 3</h6>
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
                            <a href="detalhes_ticket.php?id=<?php echo ($i['id']) ?>">
                                <i class="material-icons tiny">remove_red_eye</i></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>


</body>

</html>