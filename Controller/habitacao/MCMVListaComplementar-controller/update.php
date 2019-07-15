<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaComplementar-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListCom = new McmvListaComplementar($db);
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/Habitacao/ListaComplementar/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/Habitacao/ListaComplementar/";
        $McmvListCom->id = $id;
        $McmvListCom->titulo = $titulo;
        $McmvListCom->url = $caminhoBD.$nomeArquivo;
        
        $McmvListCom->update(); 
    }
?>