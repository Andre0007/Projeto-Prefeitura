<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/usuario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $usuario = new Usuario($db);
    $data = json_decode(file_get_contents("php://input"));
    $usuario->id = $data->id;

    if ($usuario->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>