<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHLegislacoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $legiCMH = new CMHLegislacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $legiCMH->descricao = $data->descricao;  

    $legiCMH->create();
?>