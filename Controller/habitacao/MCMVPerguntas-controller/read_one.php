<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVPerguntasFrequentes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $PergFreMcmv = new McmvPerguntasFrequentes($db);

    $data = json_decode(file_get_contents("php://input"));

    $PergFreMcmv->id = $data->id;

    $PergFreMcmv->readOne();

    $PergFreMcmv_arr[] = array(
        "id" => $PergFreMcmv->id,
        "pergunta" => $PergFreMcmv->pergunta,
        "resposta" => $PergFreMcmv->resposta
    );

    // make it json format
    print_r(json_encode($PergFreMcmv_arr));
?>