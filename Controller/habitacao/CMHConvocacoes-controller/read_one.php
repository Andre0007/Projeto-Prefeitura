<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHConvocacoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHconvocaco = new CMHconvocacoes($db);
    $data = json_decode(file_get_contents("php://input"));
    $CMHconvocaco->id = $data->id;
    $CMHconvocaco->readOne();

    $CMHconvocaco_arr[] = array(
        "id" => $CMHconvocaco->id,
        "titulo" => $CMHconvocaco->titulo,
        "data_postagem" => $CMHconvocaco->data_postagem
    );

    // make it json format
    print_r(json_encode($CMHconvocaco_arr));
?>