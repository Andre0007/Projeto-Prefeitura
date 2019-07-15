<?php
    session_start();
    $_SESSION['HabitacaoLogged_in'] = false;
    session_destroy();
    header('Location: ../../View/login-pmm-habitacao.php');
?>