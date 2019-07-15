<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/RegularizacaoEtapas-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $regEta = new RegEtapas($db);

    $regEta->readText();

    $regEta_arr[] = array(
        "descricaoEtapas" => $regEta->descricaoEtapas
    );

    print_r(json_encode($regEta_arr));
?>