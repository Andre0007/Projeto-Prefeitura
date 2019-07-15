<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoPrograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $pro = new RegPrograma($db);

    $data = json_decode(file_get_contents("php://input"));

    $pro->id = $data->id;

    $pro->readOne();

    $pro_arr[] = array(
        "id" => $pro->id,
        "descricao" => $pro->descricao
    );

    // make it json format
    print_r(json_encode($pro_arr));
?>