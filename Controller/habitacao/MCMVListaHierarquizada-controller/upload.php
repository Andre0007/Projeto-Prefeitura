<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaHierarquizada-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListHierar = new McmvListaHierarquizada($db);
    
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){   
        $caminhoUpload = "../../../App_Uploads/Habitacao/ListasHierarquizada/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/ListasHierarquizada/";
        $McmvListHierar->titulo = $titulo;
        $McmvListHierar->url = $caminhoBD.$nomeArquivo;       
        
        $McmvListHierar->create(); 
    }  
?>