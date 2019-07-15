<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/imprensa-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $imprensa = new Imprensa($db);

    $data = json_decode(file_get_contents("php://input"));

    $imprensa->numero = $data->numero;
    $imprensa->url = $data->url;
    
    $dataP = explode('/',$data->data_lancamento);
    $dataFormatParaMysql = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
    $imprensa->data_lancamento = $dataFormatParaMysql;

    if ($imprensa->create()) {
        echo "Usuário foi criado.";
    } else {
        echo "Usuário não foi criado.";
    }

?>