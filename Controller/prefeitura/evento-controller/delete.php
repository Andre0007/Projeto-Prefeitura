<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/evento-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $ev = new Evento($db);
    $data = json_decode(file_get_contents("php://input"));
    $ev->id = $data->id;

    $ev->delete();

?>