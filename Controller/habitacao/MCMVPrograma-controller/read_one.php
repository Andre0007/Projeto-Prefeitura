<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVPrograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $programaMcmv = new McmvPrograma($db);

    $data = json_decode(file_get_contents("php://input"));

    $programaMcmv->id = $data->id;

    $programaMcmv->readOne();

    $programaMcmv_arr[] = array(
        "id" => $programaMcmv->id,
        "descricao" => $programaMcmv->descricao
    );

    // make it json format
    print_r(json_encode($programaMcmv_arr));
?>