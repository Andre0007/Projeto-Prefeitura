<?php

    include_once '../../Model/class-conexao.php';
    include_once '../../Model/prefeitura/governo-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $gov = new Governo($db);
    $data = json_decode(file_get_contents("php://input"));
    $gov->categoria = $data->categoria;
    $gov->readGov();

    $gov_arr[] = array(
        "nome" => $gov->nome,
        "descricao" => $gov->descricao,
        "imagem_perfil" => $gov->imagem_perfil,
        "telefone_secretaria" => $gov->telefone_secretaria,
        "endereco_secretaria" => $gov->endereco_secretaria
    );

    print_r(json_encode($gov_arr));
?>