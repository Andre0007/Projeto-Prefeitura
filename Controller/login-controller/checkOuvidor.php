<?php
    require_once '../../Model/class-conexao.php';
    if (!isOuvidorOuvidoriaLoggedIn())
    {
        header('Location: ../../View/login-pmm-ouvidoria.php');
    }
?>