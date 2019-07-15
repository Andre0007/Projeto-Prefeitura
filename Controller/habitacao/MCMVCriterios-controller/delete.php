<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVCriterios-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $criteMcmv = new McmvCriterios($db);

    $data = json_decode(file_get_contents("php://input"));

    $criteMcmv->id = $data->id;  

    $criteMcmv->delete();
?>