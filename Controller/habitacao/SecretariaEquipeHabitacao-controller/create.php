<?php 
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/SecretariaEquipeHabitacao-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $equipe = new SecEquipeHabitacao($db);

    $data = json_decode(file_get_contents("php://input"));

    $equipe->nome = $data->nome;
    $equipe->descricao = $data->descricao;
    $equipe->url = $data->url;   

    $equipe->create();
?>