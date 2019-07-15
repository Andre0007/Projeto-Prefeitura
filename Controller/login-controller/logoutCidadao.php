<?php
    session_start();
    $_SESSION['CidadaoOuvidoriaLogged_in'] = false;
    session_destroy();
    header('Location: ../../Ouvidoria.php');
?>