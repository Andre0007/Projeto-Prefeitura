<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/noticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $noticia = new Noticias($db);
    $data = json_decode(file_get_contents("php://input"));
    $noticia->id = $data->id;

    $noticia->titulo = $data->titulo;
    $noticia->subtitulo = $data->subtitulo;
    $noticia->descricao = $data->descricao;
    $noticia->imagem_capa = $data->imagem_capa;
    
    if ($noticia->update()) {
        echo ".";
    }
    else {
        echo ".";
    }
    
?>