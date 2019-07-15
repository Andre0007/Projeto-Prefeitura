<?php
    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/SecretariaAtribuicoes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $secAtribuicoes = new SecAtribuicoes($db);

    $secAtribuicoes->readText();

    $secAtribuicoes_arr[] = array(
        "descricaoAtribuicoes" => $secAtribuicoes->descricaoAtribuicoes
    );

    print_r(json_encode($secAtribuicoes_arr));
?>