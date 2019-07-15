<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/audiencia-publica-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $audiencia = new Audiencia_Publica($db);
    $data = json_decode(file_get_contents("php://input"));
    $audiencia->id = $data->id;
    $audiencia->readOne();

    $audiencia_arr[] = array(
        "id" => $audiencia->id,
        "titulo" => $audiencia->titulo       
    );

    // make it json format
    print_r(json_encode($audiencia_arr));
?>