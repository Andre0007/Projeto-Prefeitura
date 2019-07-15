<?php
    require_once '../../Model/class-conexao.php';
    if (!isLicitacaoLoggedIn())
    {
        header('Location: ../../View/login-pmm-licitacao.php');
    }
?>
