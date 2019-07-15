<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHReunioes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHreuni = new CMHreunioes($db);

    $data = json_decode(file_get_contents("php://input"));

    $CMHreuni->id = $data->id;

    $CMHreuni->delete();
?>