<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/repasse-federal-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $repasse = new RepasseFederal($db); 
    
    $id = $_POST['id'];
    $nome_titulo = $_POST['nome_titulo'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/RepasseFederal/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/RepasseFederal/";
        $repasse->id = $id;
        $repasse->nome_titulo = $nome_titulo;
        $repasse->url = $caminhoBD.$nomeArquivo;
        $repasse->update(); 
    }  
?>