<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/audiencia-publica-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $audiencia = new Audiencia_Publica($db);
    $data = json_decode(file_get_contents("php://input"));
    $audiencia->id = $data->id;

    $audiencia->delete();
?>