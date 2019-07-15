<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/telefone-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $tel = new Telefones($db);

    $data = json_decode(file_get_contents("php://input"));

    $tel->departamento = $data->departamento;
    $tel->telefone = $data->telefone;

    if ($tel->create()) {
        echo "Telefone foi criado.";
    } else {
        echo "Telefone não foi criado.";
    }

?>