<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/repasse-federal-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $repasse = new RepasseFederal($db); 
    $data = json_decode(file_get_contents("php://input"));
    $repasse->id = $data->id;
    $repasse->readOne();

    $repasse_arr[] = array(
        "id" => $repasse->id,
        "nome_titulo" => $repasse->nome_titulo
    );

    // make it json format
    print_r(json_encode($repasse_arr));
?>