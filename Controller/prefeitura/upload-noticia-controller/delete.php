<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/upload-arquivos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);

    $data = json_decode(file_get_contents("php://input"));

    $arquivo->id = $data->id;

    if ($arquivo->deleteNoticias()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>