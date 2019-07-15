<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-concurso-edital-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $concurso = new Concurso($db);

    $data = json_decode(file_get_contents("php://input"));

    $concurso->id = $data->id;

    if ($concurso->delete()) {
        echo "Product was deleted.";
    } else {
        echo "Unable to delete object.";
    }

?>