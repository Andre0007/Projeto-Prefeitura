<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/repasse-federal-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $repasse = new RepasseFederal($db);

    $data = json_decode(file_get_contents("php://input"));

    $repasse->id = $data->id;

    $repasse->delete();
?>