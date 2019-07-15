<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/telefone-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $tel = new Telefones($db);
    $data = json_decode(file_get_contents("php://input"));
    $tel->id = $data->id;
    $tel->readOne();

    $tel_arr[] = array(
        "id" => $tel->id,
        "departamento" => $tel->departamento,
        "telefone" => $tel->telefone
    );

    print_r(json_encode($tel_arr));
?>