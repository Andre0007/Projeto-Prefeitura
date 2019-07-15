<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $notiReg = new RegNoticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $notiReg->id = $data->id;

    $notiReg->delete();
?>