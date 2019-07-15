<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/SecretariaEquipeHabitacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $equipe = new SecEquipeHabitacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $equipe->id = $data->id;

    $equipe->readOne();

    $equipe_arr[] = array(
        "id" => $equipe->id,
        "nome" => $equipe->nome,
        "descricao" => $equipe->descricao,
        "url" => $equipe->url
    );

    // make it json format
    print_r(json_encode($equipe_arr));
?>