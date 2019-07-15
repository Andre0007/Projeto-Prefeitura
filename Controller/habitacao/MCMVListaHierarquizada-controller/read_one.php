<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaHierarquizada-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListHierar = new McmvListaHierarquizada($db);
    $data = json_decode(file_get_contents("php://input"));
    $McmvListHierar->id = $data->id;
    $McmvListHierar->readOne();

    $McmvListHierar_arr[] = array(
        "id" => $McmvListHierar->id,
        "titulo" => $McmvListHierar->titulo,
        "data_postagem" => $McmvListHierar->data_postagem
    );

    // make it json format
    print_r(json_encode($McmvListHierar_arr));
?>