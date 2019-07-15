<?php
    require_once '../../Model/class-conexao.php';
    if (!isPrefeituraLoggedIn())
    {
        header('Location: ../../View/login-pmm-prefeitura.php');
    }
?>