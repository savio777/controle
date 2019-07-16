<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="../pages/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <nav>
        <div class="nav-wrapper blue darken-1">
            <div class="container">
                <a href="painel.php" class="brand-logo center"><img src="../img/logo.png" width="100"></a>
                <a href="#" data-target="mobile-teste" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <a href="painel.php">Bem Vindo <?php echo ($_SESSION['usuario_logado']['nome']) ?></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../pages/lista_produto.php">Produtos</a></li>
                    <li><a href="../pages/lista_tickets.php">Tickets</a></li>
                    <li><a href="../pages/lista_agenda.php">Agenda</a></li>
                    <li><a class="waves-effect waves-light btn" href="../controller/sair.php?id"><i class="material-icons small">exit_to_app</i>Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-teste">
        <li><a href="../pages/lista_produto.php">Produtos</a></li>
        <li><a class="waves-effect waves-light btn" href="../controller/sair.php"><i class="material-icons small left">exit_to_app</i></a></li>
    </ul>

    <br><br><br>
    <br><br><br>
    <br><br><br>

    <footer class="page-footer indigo darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Site Demo Taokey</h5>
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