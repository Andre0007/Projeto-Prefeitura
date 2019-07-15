<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/arquivo-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);
    $data = json_decode(file_get_contents("php://input"));
    $arquivo->id_arquivo = $data->id_arquivo;
    $arquivo->readOne();

    $arquivo_arr[] = array(
        "id_arquivo" => $arquivo->id_arquivo,
        "nome_arquivo_url" => $arquivo->nome_arquivo_url,
        "nome_arquivo" => $arquivo->nome_arquivo,
        "id_categoria" => $arquivo->id_categoria,
        "ano" => $arquivo->ano,
        "tipo" => $arquivo->tipo
    );

    print_r(json_encode($arquivo_arr));
?>