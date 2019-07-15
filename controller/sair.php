<?php

if($_GET){
    unset($_SESSION['usuario_logado']);

    header('Location: ../index.html');
}
