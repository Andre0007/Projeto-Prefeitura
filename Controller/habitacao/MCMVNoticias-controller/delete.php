<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $NoticiasMcmv = new McmvNoticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $NoticiasMcmv->id = $data->id;

    $NoticiasMcmv->delete();
?>