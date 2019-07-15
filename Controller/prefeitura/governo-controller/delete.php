<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/governo-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $gov = new Governo($db);
    $data = json_decode(file_get_contents("php://input"));
    $gov->id = $data->id;

    $gov->delete();
?>