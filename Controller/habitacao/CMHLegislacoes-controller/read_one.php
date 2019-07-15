<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $legiCMH = new CMHLegislacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $legiCMH->id = $data->id;

    $legiCMH->readOne();

    $legiCMH_arr[] = array(
        "id" => $legiCMH->id,
        "descricao" => $legiCMH->descricao
    );

    // make it json format
    print_r(json_encode($legiCMH_arr));
?>