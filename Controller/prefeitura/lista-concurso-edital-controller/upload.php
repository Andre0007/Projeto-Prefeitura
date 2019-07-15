<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-concurso-edital-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $concurso = new Concurso($db); 
    
    $nome_titulo = $_POST['nome_titulo'];
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/ConcursoEdital/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/ConcursoEdital/";
        $concurso->nome_titulo = $nome_titulo;
        $concurso->url = $caminhoBD.$nomeArquivo;
        $concurso->data_lancamento = date('Y-m-d H:i:s');
        $concurso->create(); 
    }
?>