<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/usuario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $usuario = new Usuario($db);

    $data = json_decode(file_get_contents("php://input"));
    $usuario->id = $data->id;
    $usuario->nome = $data->nome;
    $usuario->email = $data->email;
    $usuario->usuario = $data->usuario;
    $usuario->senha = sha1(md5( $data->senha ));

    if ($usuario->update()) {
        echo ".";
    }else {
        echo ".";
    }
    
?>