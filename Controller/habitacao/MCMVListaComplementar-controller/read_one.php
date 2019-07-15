<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaComplementar-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListCom = new McmvListaComplementar($db);
    $data = json_decode(file_get_contents("php://input"));
    $McmvListCom->id = $data->id;
    $McmvListCom->readOne();

    $McmvListCom_arr[] = array(
        "id" => $McmvListCom->id,
        "titulo" => $McmvListCom->titulo,
        "data_postagem" => $McmvListCom->data_postagem
    );

    // make it json format
    print_r(json_encode($McmvListCom_arr));
?>