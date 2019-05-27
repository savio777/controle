<?php

require_once '../crud/crudAgenda.php';

$crud = NULL;
$data = NULL;

// pega arquivo para a variavel
if (!(isset($_GET['pesquisar']))) {
    echo "<h1>Produto não existe!</h1>";
} else {
    $crud = new CrudAgenda;

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
    <a class="waves-effect waves-light btn" href="lista_agenda.php"><i class="small material-icons left">keyboard_arrow_left</i>Voltar</a><br><br>

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
            <?php if ($data != NULL) {
                foreach ($data as $i) { ?>
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
                <?php }
        } ?>
        </tbody>
    </table>


</body>