<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/UploadFotos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new ArquivosHabitacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $arquivo->id = $data->id;

    $arquivo->deleteImagem();

?>