<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/comunicados-importante-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $comunicados = new ComunicadoImportante($db);

    $data = json_decode(file_get_contents("php://input"));

    $comunicados->id = $data->id;

    $comunicados->readOne();

    $comunicados_arr[] = array(
        "id" => $comunicados->id,
        "titulo" => $comunicados->titulo,
        "descricao" => $comunicados->descricao
    );

    // make it json format
    print_r(json_encode($comunicados_arr));
?>