<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoAreas-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $areasReg = new RegAreas($db);

    $data = json_decode(file_get_contents("php://input"));

    $areasReg->numFase = $data->numFase;
    $areasReg->descricao = $data->descricao;  

    $areasReg->create();
?>