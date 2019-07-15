<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/RegularizacaoLegislacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $regLegis = new RegLegislacao($db);

    $regLegis->readText();

    $regLegis_arr[] = array(
        "descricaoLegislacao" => $regLegis->descricaoLegislacao
    );

    print_r(json_encode($regLegis_arr));
?>