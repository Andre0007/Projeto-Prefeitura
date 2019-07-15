<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/audiencia-publica-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $audiencia = new Audiencia_Publica($db);

    $titulo= $_POST['titulo'];
    $url = $_POST['url'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/AudienciaPublica/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/AudienciaPublica/";
        $audiencia->titulo = $titulo;
        $audiencia->url = $caminhoBD.$nomeArquivo;
        
        $audiencia->create(); 
    }

?>