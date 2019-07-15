<?php
    session_start();
    $_SESSION['LicitacaoLogged_in'] = false;
    session_destroy();
    header('Location: ../../View/login-pmm-licitacao.php');
?>

