<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/usuario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $usuario = new Usuario($db);
    $data = json_decode(file_get_contents("php://input"));
    $usuario->id = $data->id;
    $usuario->readOne();

    $usuario_arr[] = array(
        "id" => $usuario->id,
        "nome" => $usuario->nome,
        "email" => $usuario->email,
        "usuario" => $usuario->usuario
    );

    print_r(json_encode($usuario_arr));
?>