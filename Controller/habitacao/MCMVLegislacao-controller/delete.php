<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $legiMcmv = new McmvLegislacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $legiMcmv->id = $data->id;  

    $legiMcmv->delete();
?>