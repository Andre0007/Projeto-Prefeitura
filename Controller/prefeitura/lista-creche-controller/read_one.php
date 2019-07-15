<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-creche-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db); 
    $data = json_decode(file_get_contents("php://input"));
    $arquivo->id = $data->id;
    $arquivo->readOne();

    $arquivo_arr[] = array(
        "id" => $arquivo->id,
        "nome_titulo" => $arquivo->nome_titulo,
        "data_lancamento" => $arquivo->data_lancamento
    );

    // make it json format
    print_r(json_encode($arquivo_arr));
?>