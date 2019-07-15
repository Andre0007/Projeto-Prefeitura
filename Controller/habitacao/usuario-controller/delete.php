<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/usuario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $usuario = new Usuario($db);
    $data = json_decode(file_get_contents("php://input"));
    $usuario->id = $data->id;

    $usuario->delete();
?>