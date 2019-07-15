<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $notiReg = new RegNoticias($db);

    $data = json_decode(file_get_contents("php://input"));

    $notiReg->id = $data->id;

    $notiReg->readOne();

    $notiReg_arr[] = array(
        "id" => $notiReg->id,
        "titulo" => $notiReg->titulo,
        "subtitulo" => $notiReg->subtitulo,
        "descricao" => $notiReg->descricao,
        "imagem_capa" => $notiReg->imagem_capa
    );

    // make it json format
    print_r(json_encode($notiReg_arr));
?>