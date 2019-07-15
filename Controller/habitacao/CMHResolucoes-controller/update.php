<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHResolucoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHresolu = new CMHresolucoes($db);
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/Habitacao/CMHResolucoes/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/CMHResolucoes/";
        $CMHresolu->id = $id;
        $CMHresolu->titulo = $titulo;
        $CMHresolu->url = $caminhoBD.$nomeArquivo;
        
        $CMHresolu->update(); 
    }
?>