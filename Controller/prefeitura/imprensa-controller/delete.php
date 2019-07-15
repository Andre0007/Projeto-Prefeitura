<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/imprensa-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $imprensa = new Imprensa($db);
    $data = json_decode(file_get_contents("php://input"));
    $imprensa->id = $data->id;

    if ($imprensa->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>