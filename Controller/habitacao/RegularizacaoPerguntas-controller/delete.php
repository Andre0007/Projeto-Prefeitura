<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoPerguntasFrequentes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $perF = new RegPerguntasFrequentes($db);

    $data = json_decode(file_get_contents("php://input"));

    $perF->id = $data->id;

    $perF->delete();
?>