<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/MCMVCriterios-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mcmvCri = new McmvCriterios($db);

    $mcmvCri->readText();

    $mcmvCri_arr[] = array(
        "descricaoMcmvCriterios" => $mcmvCri->descricaoMcmvCriterios
    );

    print_r(json_encode($mcmvCri_arr));
?>