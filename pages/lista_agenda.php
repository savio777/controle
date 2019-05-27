<?php
require_once '../crud/crudAgenda.php';

$crud = new CrudAgenda;

$linhas = $crud->lerTodos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Lista Agenda</title>
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="painel_agenda.html"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a><br><br>
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
    <table class="highlight">
        <thead>
            <tr>
                <td><b>Id</b></td>
                <td><b>Nome</b></td>
                <td><b>Número</b></td>
                <td><b>Rua</b></td>
                <td><b>Bairro</b></td>
                <td><b>CEP</b></td>
                <td><b>Cidade</b></td>
                <td><b>Estado</b></td>
                <td><b>País</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linhas as $i) { ?>
                <tr>
                    <td><?php echo $i['id'] ?></td>
                    <td><?php echo $i['nome'] ?></td>
                    <td><?php echo $i['numero'] ?></td>
                    <td><?php echo $i['rua'] ?></td>
                    <td><?php echo $i['bairro'] ?></td>
                    <td><?php echo $i['cep'] ?></td>
                    <td><?php echo $i['cidade'] ?></td>
                    <td><?php echo $i['estado'] ?></td>
                    <td><?php echo $i['pais'] ?></td>
                    <td><a href="../pages/editar_agenda.php?id=<?php echo ($i['id']); ?>">
                            <i class="small material-icons">create</i></a></td>
                    <td><a href="../controller/excluirAgenda.php?id=<?php echo ($i['id']); ?>">
                            <i class="small material-icons">delete</i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>