<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/RegularizacaoPrograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $regProgra = new RegPrograma($db);

    $regProgra->readText();

    $regProgra_arr[] = array(
        "descricaoPrograma" => $regProgra->descricaoPrograma
    );

    print_r(json_encode($regProgra_arr));
?>