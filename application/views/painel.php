<?php
defined('BASEPATH') or exit('No direct script access allowed');
$url_base = 'http://localhost/estoque-web-php';

if (
  empty($this->session->userdata['nome']) || empty($this->session->userdata['id']) ||
  empty($this->session->userdata['email'])
) {
  header('Location: ../');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    h4 {
      text-align: center;
    }

    h6 {
      color: white;
    }
  </style>
</head>

<body class="indigo lighten-4"
  <div class="navbar-fixed">
    <nav class="black">
      <div class="nav-wrapper">
        <div class="container">
          <a href="painel.php" class="brand-logo center">
            <img src="<?php echo $url_base ?>/assets/logo.png" width="100">
          </a>
          <a href="#" data-target="mobile-teste" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <a href="painel.php">Bem Vindo <?php echo ($usuario->userdata['nome']) ?></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../pages/lista_produto.php">Produtos</a></li>
            <li><a href="../pages/lista_tickets.php">Tickets</a></li>
            <li><a href="../index.php/agenda">Agenda</a></li>
            <li>
              <a class="blue waves-effect waves-light btn" href="../index.php/usuario/logout">
                <i class="material-icons small">exit_to_app</i>Sair
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-teste">
    <li><a href="../pages/lista_produto.php">Produtos</a></li>
    <li><a href="../pages/lista_tickets.php">Tickets</a></li>
    <li><a href="../pages/lista_agenda.php">Agenda</a></li>
    <li><a class="blue waves-effect waves-light btn" href="../index.php/usuario/logout">
        <i class="material-icons small left">exit_to_app</i></a></li>
  </ul>

  <br><br><br><br>

  <div class="container">
    <div class="card-panel blue">
      <h4>Tickets</h4>
    </div>
  </div>

  <br><br>

  <div class="container">
    <div class="row">
      <?php if (!empty($tickets[0]->prioridade)) { ?>
        <?php foreach ($tickets as $i) { ?>
          <?php if ($i->prioridade == 1) { ?>
            <div class="col s10 m3">
              <div class="card purple darken-4">
                <div class="card-content white-text">
                  <span class="card-title"><?php echo ($i->titulo) ?></span>
                  <p><?php echo ($i->descricao) ?></p>
                  <p><?php echo ($i->criado) ?></p>
                </div>
                <div class="card-action">
                  <a href="../controller/excluirTicket.php?id=<?php echo ($i->id) ?>">
                    <i class="material-icons tiny">done</i></a>
                  <a href="detalhes_ticket.php?id=<?php echo ($i->id) ?>">
                    <i class="material-icons tiny">remove_red_eye</i></a>
                </div>
              </div>
            </div>
      <?php }
        }
      } ?>
    </div>
  </div>

  <br><br>

  <div class="container">
    <div class="card-panel blue">
      <h4>Agenda</h4>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">
      <?php if (!empty($agenda[0]->id)) {  ?>
        <?php foreach ($agenda as $i) { ?>
          <a href="detalhes_agenda.php?id=<?php echo ($i->id) ?>">
            <div class="card-panel purple darken-4">
              <?php echo ($i->titulo) ?> -- Começo Evento: <?php echo ($i->comeco) ?> |
              <?php if ($i->fim != '0000-00-00 00:00:00') echo ($i->fim) ?>
            </div>
          </a>
      <?php }
      } ?>
    </div>
  </div>

  <br><br>

  <footer class="page-footer blue-grey">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Site Demo</h5>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="https://github.com/savio777">Github</a></li>
            <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/s%C3%A1vio-pal%C3%A1cio-fontes-3924aa16b/?originalSubdomain=ie">LinkedIn</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/savioo_fontes/">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2019 SDeV Copyright
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>
</body>

</html>