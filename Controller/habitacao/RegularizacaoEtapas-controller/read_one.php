<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoEtapas-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $etapasReg = new RegEtapas($db);

    $data = json_decode(file_get_contents("php://input"));

    $etapasReg->id = $data->id;

    $etapasReg->readOne();

    $etapasReg_arr[] = array(
        "id" => $etapasReg->id,
        "descricao" => $etapasReg->descricao
    );

    // make it json format
    print_r(json_encode($etapasReg_arr));
?>