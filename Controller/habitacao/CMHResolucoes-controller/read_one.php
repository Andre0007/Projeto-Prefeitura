<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHResolucoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHresolu = new CMHresolucoes($db);
    $data = json_decode(file_get_contents("php://input"));
    $CMHresolu->id = $data->id;
    $CMHresolu->readOne();

    $CMHresolu_arr[] = array(
        "id" => $CMHresolu->id,
        "titulo" => $CMHresolu->titulo,
        "data_postagem" => $CMHresolu->data_postagem
    );

    // make it json format
    print_r(json_encode($CMHresolu_arr));
?>