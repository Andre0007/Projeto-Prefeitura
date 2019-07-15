<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/evento-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $ev = new Evento($db);
    $data = json_decode(file_get_contents("php://input"));
    $ev->id = $data->id;
    $ev->readOne();

    $ev_arr[] = array(
        "id" => $ev->id,
        "title" => $ev->title,
        "data_inicio" => $ev->data_inicio,
        "data_termino" => $ev->data_termino,
        "descricao" => $ev->descricao
    );

    print_r(json_encode($ev_arr));
?>