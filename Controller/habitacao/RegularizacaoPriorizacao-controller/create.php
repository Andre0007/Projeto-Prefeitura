<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoPriorizacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $pri = new RegPriorizacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $pri->descricao = $data->descricao;  

    $pri->create();
?>