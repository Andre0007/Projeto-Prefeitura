<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaHierarquizada-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListHierar = new McmvListaHierarquizada($db); 
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/Habitacao/ListasHierarquizada/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/ListasHierarquizada/";
        $McmvListHierar->id = $id;
        $McmvListHierar->titulo = $titulo;
        $McmvListHierar->url = $caminhoBD.$nomeArquivo;
        
        $McmvListHierar->update(); 
    }
?>