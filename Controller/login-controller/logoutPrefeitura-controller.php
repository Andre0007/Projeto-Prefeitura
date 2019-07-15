<?php
    session_start();
    $_SESSION['PrefeituraLogged_in'] = false;
    session_destroy();
    header('Location: ../../View/login-pmm-prefeitura.php');
?>