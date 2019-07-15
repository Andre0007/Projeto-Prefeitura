<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/MCMVLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mcmvLegis = new McmvLegislacao($db);

    $mcmvLegis->readText();

    $mcmvLegis_arr[] = array(
        "descricaoMcmvLegislacao" => $mcmvLegis->descricaoMcmvLegislacao
    );

    print_r(json_encode($mcmvLegis_arr));
?>