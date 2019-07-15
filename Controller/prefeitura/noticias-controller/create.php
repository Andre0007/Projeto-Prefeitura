<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/noticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $noticia = new Noticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $noticia->titulo = $data->titulo;
    $noticia->subtitulo = $data->subtitulo;
    $noticia->descricao = $data->descricao;
    $noticia->data_postagem = date('Y-m-d H:i:s');
    $noticia->imagem_capa = $data->imagem_capa;   

    if ($noticia->create()) {
        echo "Product was created.";
    } else {
        echo "Unable to create product.";
    }

?>