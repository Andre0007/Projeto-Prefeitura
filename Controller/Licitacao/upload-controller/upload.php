<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/upload-arquivos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $upload = new Upload($db);
    
    if($_FILES['file']['name'] != ""){       
        $CaminhoArquivo = '../../../App_Uploads/Licitacoes/';
        $NomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES["file"]["tmp_name"], $CaminhoArquivo.$NomeArquivo);      
        
        $CaminhoArquivoLici = 'App_Uploads/Licitacoes/';
        $upload->url_arquivo = $CaminhoArquivoLici .$NomeArquivo;
        $upload->data_upload = date('Y-m-d');
        $upload->create();
    }
?>