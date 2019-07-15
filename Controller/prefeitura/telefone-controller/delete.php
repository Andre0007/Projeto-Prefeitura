<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/telefone-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $tel = new Telefones($db);
    $data = json_decode(file_get_contents("php://input"));
    $tel->id = $data->id;

    if ($tel->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>