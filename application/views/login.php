<?php
defined('BASEPATH') or exit('No direct script access allowed');
$url_base = 'http://localhost/estoque-web-php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Estoque Web Test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo $url_base ?>/assets/login.css">
</head>

<body>
  <div class="container">
    <div class="card-panel white-text">
      <h4>Logar</h4>
    </div>
  </div>

  <div id="form" class="row">
    <form class="col s12" action="index.php/usuario/login" method="POST">
      <div class="col s12 m12">
        <div class="card-panel">
          <div class="card-content white-text">
            <div class="row">
              <div class="input-field col s12">
                <input id="email" class="white-text validate" name="email" type="email">
                <label for="name" class="active">Email</label>
              </div>
              <div class="input-field col s12">
                <input id="senha" class="white-text validate" type="password" name="senha">
                <label for="senha" class="active">Senha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Logar
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>