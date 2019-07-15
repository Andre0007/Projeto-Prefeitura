<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/upload-arquivos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);
    
    if($_FILES['file']['name'] != ""){        
        $CaminhoArquivo = '../../../App_Uploads/Noticias/';
        $NomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES["file"]["tmp_name"], $CaminhoArquivo.$NomeArquivo);      
        
        $CaminhoArquivoPref = 'http://www.mairipora.sp.gov.br/App_Uploads/Noticias/';
        $arquivo->url = $CaminhoArquivoPref .$NomeArquivo;
        $arquivo->data_upload = date('Y-m-d');
        $arquivo->UploadNoticias();      
    }
?>