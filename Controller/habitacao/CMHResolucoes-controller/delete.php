<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHResolucoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHresolu = new CMHresolucoes($db);

    $data = json_decode(file_get_contents("php://input"));

    $CMHresolu->id = $data->id;

    $CMHresolu->delete();
?>