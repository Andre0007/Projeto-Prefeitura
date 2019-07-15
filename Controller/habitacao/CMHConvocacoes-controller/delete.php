<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHConvocacoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHconvocaco = new CMHconvocacoes($db);

    $data = json_decode(file_get_contents("php://input"));

    $CMHconvocaco->id = $data->id;

    $CMHconvocaco->delete();
?>