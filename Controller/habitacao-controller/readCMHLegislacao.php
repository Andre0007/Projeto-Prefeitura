<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/CMHLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $cmhLegis = new CMHLegislacao($db);

    $cmhLegis->readText();

    $cmhLegis_arr[] = array(
        "descricaoCMHLegislacao" => $cmhLegis->descricaoCMHLegislacao
    );

    print_r(json_encode($cmhLegis_arr));
?>