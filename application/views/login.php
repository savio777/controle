<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$url_base = 'http://localhost/estoque-web-php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Estoque Web Test</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo $url_base ?>/assets/estilo.css">
</head>

<body>

  <div class="card-panel teal lighten-2">
    <h1>Logar</h1>
  </div>
  <br><br><br>


  <div class="row">
    <form class="col 12" action="controller/validarUser.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="usuario" class="validate" name="usuario">
          <label for="name" class="active">Usuario</label>
        </div>
        <div class="input-field col s12">
          <input id="senha" class="validate" type="password" name="senha"><br><br>
          <label for="senha" class="active">Senha</label>
        </div>
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Logar
            <i class="large material-icons left">send</i>
          </button>
        </div>
      </div>
    </form>
</body>

</html>