<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/categoria-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $categoria = new Categoria($db);
    $data = json_decode(file_get_contents("php://input"));
    $categoria->id_categoria = $data->id_categoria;

    if ($categoria->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>