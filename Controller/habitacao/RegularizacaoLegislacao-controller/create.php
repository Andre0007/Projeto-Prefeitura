<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $legiReg = new RegLegislacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $legiReg->descricao = $data->descricao;  

    $legiReg->create();
?>