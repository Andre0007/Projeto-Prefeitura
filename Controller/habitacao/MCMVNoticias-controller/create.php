<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $NoticiasMcmv = new McmvNoticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $NoticiasMcmv->titulo = $data->titulo;
    $NoticiasMcmv->subtitulo = $data->subtitulo;
    $NoticiasMcmv->descricao = $data->descricao;  
    $NoticiasMcmv->imagem_capa = $data->imagem_capa;  

    $NoticiasMcmv->create();
?>