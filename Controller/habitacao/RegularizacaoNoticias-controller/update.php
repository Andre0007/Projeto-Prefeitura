<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/RegularizacaoNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $notiReg = new RegNoticias($db);
    $data = json_decode(file_get_contents("php://input"));
    
    $notiReg->id = $data->id;
    $notiReg->titulo = $data->titulo;
    $notiReg->subtitulo = $data->subtitulo;
    $notiReg->descricao = $data->descricao;  
    $notiReg->imagem_capa = $data->imagem_capa;
    
    $notiReg->update();
?>