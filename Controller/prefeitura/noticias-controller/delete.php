<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/noticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $noticia = new Noticias($db);

    // get product id
    $data = json_decode(file_get_contents("php://input"));

    // set product id to be deleted
    $noticia->id = $data->id;

    // delete the product
    if ($noticia->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }
    
?>