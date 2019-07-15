<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHReunioes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHreuni = new CMHreunioes($db);
    
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){   
        $caminhoUpload = "../../../App_Uploads/Habitacao/CMHReunioes/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/CMHReunioes/";
        $CMHreuni->titulo = $titulo;
        $CMHreuni->url = $caminhoBD.$nomeArquivo;       
        
        $CMHreuni->create(); 
    }  
?>