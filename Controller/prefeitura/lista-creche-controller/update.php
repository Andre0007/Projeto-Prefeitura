<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/lista-creche-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db); 
    
    $id = $_POST['id'];
    $nome_titulo = $_POST['nome_titulo'];
    $data_lancamento = $_POST['data_lancamento'];
    
    if($_FILES['file']['name'] != ""){ 
        $caminhoUpload = "../../../App_Uploads/ListasCreche/";
        $nomeArquivo = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$caminhoUpload.$nomeArquivo); 
        
        $caminhoBD = "App_Uploads/ListasCreche/";
        $arquivo->id = $id;
        $arquivo->nome_titulo = $nome_titulo;
        $arquivo->url = $caminhoBD.$nomeArquivo;
        
        $dataP = explode('/',$data_lancamento);
        $dataFormatParaMysql = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
        $arquivo->data_lancamento = $dataFormatParaMysql;
        
        $arquivo->update(); 
    }
?>