<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/upload-arquivos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $upload = new Upload($db);

    $data = json_decode(file_get_contents("php://input"));

    $upload->id_upload = $data->id_upload;

    $upload->delete();
?>