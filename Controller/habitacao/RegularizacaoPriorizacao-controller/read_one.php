<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoPriorizacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $pri = new RegPriorizacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $pri->id = $data->id;

    $pri->readOne();

    $pri_arr[] = array(
        "id" => $pri->id,
        "descricao" => $pri->descricao
    );

    // make it json format
    print_r(json_encode($pri_arr));
?>