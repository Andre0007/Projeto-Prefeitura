<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $legiReg = new RegLegislacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $legiReg->id = $data->id;

    $legiReg->readOne();

    $legiReg_arr[] = array(
        "id" => $legiReg->id,
        "descricao" => $legiReg->descricao
    );

    // make it json format
    print_r(json_encode($legiReg_arr));
?>