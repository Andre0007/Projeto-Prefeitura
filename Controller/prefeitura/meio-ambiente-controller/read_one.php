<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/meio-ambiente-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $meioAmbiente = new MeioAmbiente($db);
    $data = json_decode(file_get_contents("php://input"));
    $meioAmbiente->id = $data->id;
    $meioAmbiente->readOne();

    $meioAmbiente_arr[] = array(
        "id" => $meioAmbiente->id,
        "nome_titulo" => $meioAmbiente->nome_titulo
    );

    // make it json format
    print_r(json_encode($meioAmbiente_arr));
?>