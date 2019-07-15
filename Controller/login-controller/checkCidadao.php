<?php
    require_once '../../Model/class-conexao.php';
    if (!isCidadaoOuvidoriaLoggedIn())
    {
        header('Location: ../../Ouvidoria.php');
    }
?>