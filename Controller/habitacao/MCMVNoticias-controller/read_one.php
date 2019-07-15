<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $NoticiasMcmv = new McmvNoticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $NoticiasMcmv->id = $data->id;

    $NoticiasMcmv->readOne();

    $NoticiasMcmv_arr[] = array(
        "id" => $NoticiasMcmv->id,
        "titulo" => $NoticiasMcmv->titulo,
        "subtitulo" => $NoticiasMcmv->subtitulo,
        "descricao" => $NoticiasMcmv->descricao,
        "imagem_capa" => $NoticiasMcmv->imagem_capa
    );

    // make it json format
    print_r(json_encode($NoticiasMcmv_arr));
?>