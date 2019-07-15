<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-concurso-edital-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $concurso = new Concurso($db); 
    $data = json_decode(file_get_contents("php://input"));
    $concurso->id = $data->id;
    $concurso->readOne();

    $concurso_arr[] = array(
        "id" => $concurso->id,
        "nome_titulo" => $concurso->nome_titulo
    );

    // make it json format
    print_r(json_encode($concurso_arr));
?>