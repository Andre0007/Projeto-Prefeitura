<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoAreas-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $areasReg = new RegAreas($db);

    $data = json_decode(file_get_contents("php://input"));

    $areasReg->id = $data->id;

    $areasReg->readOne();

    $areasReg_arr[] = array(
        "id" => $areasReg->id,
        "numFase" => $areasReg->numFase,
        "descricao" => $areasReg->descricao
    );

    // make it json format
    print_r(json_encode($areasReg_arr));
?>