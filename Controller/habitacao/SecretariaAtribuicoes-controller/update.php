<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/SecretariaAtribuicoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $atri = new SecAtribuicoes($db);
    $data = json_decode(file_get_contents("php://input"));
    
    $atri->id = $data->id;
    $atri->descricao = $data->descricao;
    
    $atri->update();
?>