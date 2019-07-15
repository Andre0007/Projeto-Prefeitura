<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/noticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $noticia = new Noticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $noticia->id = $data->id;

    $noticia->readOne();

    $noticia_arr[] = array(
        "id" => $noticia->id,
        "titulo" => $noticia->titulo,
        "subtitulo" => $noticia->subtitulo,
        "descricao" => $noticia->descricao,
        "imagem_capa" => $noticia->imagem_capa
    );

    // make it json format
    print_r(json_encode($noticia_arr));
?>