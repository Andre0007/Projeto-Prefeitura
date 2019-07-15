<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-creche-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);

    // get product id
    $data = json_decode(file_get_contents("php://input"));

    // set product id to be deleted
    $arquivo->id = $data->id;

    // delete the product
    if ($arquivo->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>