<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVCronograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mcmvCro = new MCMVCronograma($db);
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/Habitacao/Cronograma/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/Cronograma/";
        $mcmvCro->id = $id;
        $mcmvCro->titulo = $titulo;
        $mcmvCro->url = $caminhoBD.$nomeArquivo;
        
        $mcmvCro->update(); 
    }
?>