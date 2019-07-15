<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaHierarquizada-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListHierar = new McmvListaHierarquizada($db);

    $data = json_decode(file_get_contents("php://input"));

    $McmvListHierar->id = $data->id;

    $McmvListHierar->delete();
?>