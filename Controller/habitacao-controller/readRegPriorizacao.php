<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/RegularizacaoPriorizacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $regPrio = new RegPriorizacao($db);

    $regPrio->readText();

    $regPrio_arr[] = array(
        "descricaoPriorizacao" => $regPrio->descricaoPriorizacao
    );

    print_r(json_encode($regPrio_arr));
?>