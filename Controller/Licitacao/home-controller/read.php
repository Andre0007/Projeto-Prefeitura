<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/home-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $dash = new Dashboard($db);
    $data = json_decode(file_get_contents("php://input"));
    $dash->readAll();

    $dash_arr[] = array(
        "count_downloads" => $dash->count_downloads,
        "count_cpf" => $dash->count_cpf,        
        "count_cnpj" => $dash->count_cnpj,
        "count_ativados_download" => $dash->count_ativados_download,
        "count_desativado_download" => $dash->count_desativado_download,
        "count_ativados_arquivos" => $dash->count_ativados_arquivos,
        "count_desativado_arquivos" => $dash->count_desativado_arquivos
    );

    print_r(json_encode($dash_arr));
?>