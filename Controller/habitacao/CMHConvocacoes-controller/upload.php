<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/CMHConvocacoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $CMHconvocaco = new CMHconvocacoes($db);
    
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){   
        $caminhoUpload = "../../../App_Uploads/Habitacao/CMHConvocacoes/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/CMHConvocacoes/";
        $CMHconvocaco->titulo = $titulo;
        $CMHconvocaco->url = $caminhoBD.$nomeArquivo;       
        
        $CMHconvocaco->create(); 
    }  
?>