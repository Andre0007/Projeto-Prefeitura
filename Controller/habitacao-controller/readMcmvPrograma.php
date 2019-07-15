<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/MCMVPrograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mcmvProgra = new McmvPrograma($db);

    $mcmvProgra->readText();

    $mcmvProgra_arr[] = array(
        "descricaoMcmvPrograma" => $mcmvProgra->descricaoMcmvPrograma
    );

    print_r(json_encode($mcmvProgra_arr));
?>