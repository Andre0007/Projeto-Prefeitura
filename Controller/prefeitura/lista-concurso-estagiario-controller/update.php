<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-concurso-estagiario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $concurso = new Concurso($db); 
    
    $id = $_POST['id'];
    $nome_titulo = $_POST['nome_titulo'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/ConcursoEstagiario/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/ConcursoEstagiario/";
        $concurso->id = $id;
        $concurso->nome_titulo = $nome_titulo;
        $concurso->url = $caminhoBD.$nomeArquivo;
        $concurso->updateComAnexo(); 
    }else{
        $concurso->id = $id;
        $concurso->nome_titulo = $nome_titulo;
       $concurso->updateSemAnexo(); 
    }  
?>