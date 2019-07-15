<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/meio-ambiente-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $meioAmbiente = new MeioAmbiente($db);

    $data = json_decode(file_get_contents("php://input"));

    $meioAmbiente->id = $data->id;

    $meioAmbiente->delete();
?>