<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVCronograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mcmvCro = new MCMVCronograma($db);
    $data = json_decode(file_get_contents("php://input"));
    $mcmvCro->id = $data->id;
    $mcmvCro->readOne();

    $mcmvCro_arr[] = array(
        "id" => $mcmvCro->id,
        "titulo" => $mcmvCro->titulo,
        "data_postagem" => $mcmvCro->data_postagem
    );

    // make it json format
    print_r(json_encode($mcmvCro_arr));
?>