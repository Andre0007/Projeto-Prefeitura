<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVPerguntasFrequentes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $PergFreMcmv = new McmvPerguntasFrequentes($db);

    $data = json_decode(file_get_contents("php://input"));

    $PergFreMcmv->pergunta = $data->pergunta;
    $PergFreMcmv->resposta = $data->resposta;  

    $PergFreMcmv->create();
?>