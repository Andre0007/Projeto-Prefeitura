<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/imprensa-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $imprensa = new Imprensa($db);
    $data = json_decode(file_get_contents("php://input"));
    $imprensa->id = $data->id;
    $imprensa->readOne();

    $imprensa_arr[] = array(
        "id" => $imprensa->id,
        "numero" => $imprensa->numero,
        "url" => $imprensa->url,
        "data_lancamento" => $imprensa->data_lancamento
    );

    print_r(json_encode($imprensa_arr));
?>