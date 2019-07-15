<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/email-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $mail = new Emails($db);

    $data = json_decode(file_get_contents("php://input"));
    $mail->id = $data->id;
    $mail->email = $data->email;

    if ($mail->update()) {
        echo ".";
    }else {
        echo ".";
    }
    
?>