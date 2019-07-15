<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/arquivo-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);

    $data = json_decode(file_get_contents("php://input"));
   
    $arquivo->id_arquivo = $data->id_arquivo;
    $arquivo->tipo = $data->StringTipoSelected;
    $arquivo->id_categoria = $data->IDcategoriaSelected;   
    $arquivo->nome_arquivo_url = $data->url_arquivo;
    $arquivo->nome_arquivo = $data->nome_arquivo;
    $arquivo->ano = $data->ano;

    $arquivo->update(); 
?>