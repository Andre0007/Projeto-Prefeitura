<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaComplementar-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListCom = new McmvListaComplementar($db);

    $data = json_decode(file_get_contents("php://input"));

    $McmvListCom->id = $data->id;

    $McmvListCom->delete();
?>