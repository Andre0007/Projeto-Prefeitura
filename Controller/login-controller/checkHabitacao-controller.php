<?php
    require_once '../../Model/class-conexao.php';
    if (!isHabitacaoLoggedIn())
    {
        header('Location: ../../View/login-pmm-habitacao.php');
    }
?>