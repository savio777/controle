<?php
defined('BASEPATH') or exit('No direct script access allowed');
$url_base = 'http://localhost/estoque-web-php/assets';
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
      color: <?php echo ($resultado[0]->cortexto) ?>;
      background-color: <?php echo ($resultado[0]->cor) ?>;

    }
  </style>
</head>

<body>
  <!-- botão voltar -->
  <a class="waves-effect waves-light btn" href="../../agenda">
    <i class="small material-icons left">keyboard_arrow_left</i>Voltar</a>
  <!-- botão para excluir ticket -->
  <a class="waves-effect waves-light btn" href="../feito/<?php echo $resultado[0]->id ?>">
    <i class="small material-icons left">done</i>Feito</a>
  <!-- botão para editar ticket -->
  <a class="waves-effect waves-light btn" href="../editar/<?php echo $resultado[0]->id ?>">
    <i class="small material-icons left">edit</i>editar</a>

  <h1>Detalhes do Evento</h1>

  <div class="container">
    <div class="divider"></div>
    <div class="section">
      <h5>Título</h5>
      <p><b><?php echo ($resultado[0]->titulo) ?></b></p>
    </div>
    <div class="divider"></div>
    <div class="section">
      <h5>Descriçao</h5>
      <p><?php echo ($resultado[0]->descricao) ?></p>
    </div>
    <div class="divider"></div>
    <div class="section">
      <h5>Começo do Evento</h5>
      <p><?php echo ($resultado[0]->comeco) ?></p>
    </div>
    <div class="divider"></div>
    <div class="section">
      <h5>Fim do Evento</h5>
      <p><?php echo ($resultado[0]->fim) ?></p>
    </div>
  </div>
  </div>
</body>

</html>