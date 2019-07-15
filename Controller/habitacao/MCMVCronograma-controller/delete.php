<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVCronograma-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mcmvCro = new MCMVCronograma($db);

    $data = json_decode(file_get_contents("php://input"));

    $mcmvCro->id = $data->id;

    $mcmvCro->delete();
?>