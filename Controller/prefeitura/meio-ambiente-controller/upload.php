<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/meio-ambiente-model.php';
    
    $database = new conexaoBD();
    $db = $database->getConnection();

    $meioAmbiente = new MeioAmbiente($db); 
    
    $nome_titulo = $_POST['nome_titulo'];
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/MeioAmbiente/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/MeioAmbiente/";
        $meioAmbiente->nome_titulo = $nome_titulo;
        $meioAmbiente->url = $caminhoBD.$nomeArquivo;
        $meioAmbiente->create(); 
    }
?>