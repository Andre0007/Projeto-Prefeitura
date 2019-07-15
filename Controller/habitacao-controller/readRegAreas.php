<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/RegularizacaoAreas-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $areasReg = new RegAreas($db);

    $areasReg->readText();

    $areasReg_arr[] = array(
        "numFase" => $areasReg->numFase,
        "descricaoArea" => $areasReg->descricaoArea
    );

    print_r(json_encode($areasReg_arr));
?>