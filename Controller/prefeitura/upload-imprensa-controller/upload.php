<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/upload-arquivos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);
    
    if($_FILES['file']['name'] != ""){       
        $CaminhoArquivo = '../../../App_Uploads/Imprensa/2017/';
        $NomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES["file"]["tmp_name"], $CaminhoArquivo.$NomeArquivo);      
        
        $CaminhoArquivoPref = 'App_Uploads/Imprensa/2017/';
        $arquivo->url = $CaminhoArquivoPref .$NomeArquivo;
        $arquivo->data_upload = date('Y-m-d');
        $arquivo->UploadImprensa();
    }
?>