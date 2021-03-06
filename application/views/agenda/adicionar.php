<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Evento</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <!-- botão voltar -->
  <div class="card-panel teal lighten-2">
    <a class="waves-effect waves-light btn" href="../agenda"><i class="small material-icons left">keyboard_arrow_left</i>Cancelar</a>
    <h2>Adicionar Agenda</h2>
  </div>

  <br><br>

  <div class="container">
    <div class="row">
      <form class="col s12" method="POST" action="../agenda/cadastrar">
        <div class="row">
          <div class="input-field col s12">
            <input id="titulo" name="titulo" type="text">
            <label class="active" for="titulo">Título</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
            <!--<input id="descricao" name="descricao">-->
            <label class="active" for="descricao">Descricão</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <br><input type="color" id="cor" name="cor">
            <label class="active" for="cor">Cor</label>
          </div>
          <div class="input-field col s6">
            <br><input type="color" id="cortexto" name="cortexto">
            <label class="active" for="cortexto">Cor texto</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="comeco" name="comeco" type="datetime-local">
            <label class="active" for="comeco">Início</label>
          </div>
          <div class="input-field col s6">
            <input id="fim" name="fim" type="datetime-local">
            <label class="active" for="fim">Fim (mais de um dia)</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light"><i class="material-icons left">save</i>salvar</button>
      </form>
    </div>
  </div>
</body>

</html>