<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/comunicados-importante-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $comunicados = new ComunicadoImportante($db);

    $data = json_decode(file_get_contents("php://input"));

    $comunicados->titulo = $data->titulo;
    $Descricao = str_replace('"',"'",$data->descricao);
    $comunicados->descricao = $Descricao;
    $comunicados->data_postagem = date('Y-m-d H:i:s');  

    $comunicados->create();
?>