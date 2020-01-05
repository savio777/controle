<?php
defined('BASEPATH') or exit('No direct script access allowed');

$url_base = 'http://localhost/controle';
$url_github = 'https://github.com/savio777';
$url_linkedin = 'https://www.linkedin.com/in/s%C3%A1vio-pal%C3%A1cio-fontes-3924aa16b/?originalSubdomain=ie';
$url_instagram = 'https://www.instagram.com/savioo_fontes/';

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
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo $url_base ?>/assets/styles/painel.css">
</head>

<body class="indigo lighten-4">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <div class="container">
          <a href="#" class="brand-logo center">
            <img src="<?php echo $url_base ?>/assets/img/logo.png" width="100">
          </a>
          <a href="#" data-target="mobile-teste" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <a href="#">Bem Vindo <?php echo ($usuario->userdata['nome']) ?></a>
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
    <div id="card-title" class="card-panel white-text">
      <h4>Tickets</h4>
    </div>
  </div>

  <br><br>

  <div class="container">
    <div class="row">
      <?php if (!empty($tickets[0]->prioridade)) { ?>
        <?php for ($i = 0; $i < 3; $i++) { ?>
          <?php if ($tickets[$i]->prioridade == 1) { ?>
            <div class="col s10 m3">
              <div id="cards" class="card darken-4">
                <div class="card-content white-text">
                  <span class="card-title"><?php echo ($i->titulo) ?></span>
                  <p><?php echo $tickets[$i]->descricao ?></p>
                  <p><?php echo $tickets[$i]->criado ?></p>
                </div>
                <div class="card-action">
                  <a href="tickets/excluir/<?php echo $tickets[$i]->id ?>">
                    <i class="material-icons tiny">done</i></a>
                  <a href="tickets/detalhes/<?php echo $tickets[$i]->id ?>">
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
    <div id="card-title" class="card-panel white-text">
      <h4>Agenda</h4>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">
      <?php if (!empty($agenda[0]->id)) {  ?>
        <?php for ($i = 0; $i < 3; $i++) { ?>
          <a href="agenda/detalhes/<?php echo $agenda[$i]->id ?>">
            <div id="cards" class="card-panel white-text">
              <?php echo ($agenda[$i]->titulo) ?> -- Começo Evento: <?php echo $agenda[$i]->comeco ?> |
              <?php if ($agenda[$i]->fim != '0000-00-00 00:00:00') echo $agenda[$i]->fim ?>
            </div>
          </a>
      <?php }
      } ?>
    </div>
  </div>

  <br><br>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Site Demo</h5>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text"><i class="material-icons left">people</i>Links</h5>
          <ul>
            <li>
              <a class="grey-text text-lighten-3" href="<?php echo $url_github ?>">Github</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="<?php echo $url_linkedin ?>">LinkedIn</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="<?php echo $url_instagram ?>">Instagram</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container white-text">
        © 2019 SDeV Copyright<i class="material-icons right">developer_mode</i>
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