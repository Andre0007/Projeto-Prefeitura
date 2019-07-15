<?php
    session_start();
    $_SESSION['OuvidorOuvidoriaLogged_in'] = false;
    session_destroy();
    header('Location: ../../View/login-pmm-prefeitura.php');
?>