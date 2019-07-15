<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/MCMVNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $noticia = new McmvNoticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $noticia->id = $data->id;

    $noticia->readNoticia();

    $noticia_arr[] = array(       
        "titulo" => $noticia->titulo,
        "subtitulo" => $noticia->subtitulo,
        "descricao" => $noticia->descricao,
        "data_postagem" => $noticia->data_postagem,
        "imagem_capa" => $noticia->imagem_capa
    );

    // make it json format
    print_r(json_encode($noticia_arr));
?>