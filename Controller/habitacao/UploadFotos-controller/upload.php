<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/UploadFotos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new ArquivosHabitacao($db);
    
    if($_FILES['file']['name'] != ""){       
        $CaminhoArquivo = '../../../App_Uploads/Habitacao/UploadFotos/';
        $NomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES["file"]["tmp_name"], $CaminhoArquivo.$NomeArquivo);      
        
        $CaminhoArquivoHabitacao = 'App_Uploads/Habitacao/UploadFotos/';
        $arquivo->url = $CaminhoArquivoHabitacao .$NomeArquivo;
        $arquivo->data_upload = date('Y-m-d');
        $arquivo->UploadImagem();
    }
?>