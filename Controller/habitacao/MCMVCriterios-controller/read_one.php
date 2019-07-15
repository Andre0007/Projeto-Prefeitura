<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVCriterios-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $criteMcmv = new McmvCriterios($db);

    $data = json_decode(file_get_contents("php://input"));

    $criteMcmv->id = $data->id;

    $criteMcmv->readOne();

    $criteMcmv_arr[] = array(
        "id" => $criteMcmv->id,
        "descricao" => $criteMcmv ->descricao
    );

    // make it json format
    print_r(json_encode($criteMcmv_arr));
?>