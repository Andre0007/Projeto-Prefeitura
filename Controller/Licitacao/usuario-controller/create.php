<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/usuario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $usuario = new Usuario($db);

    $data = json_decode(file_get_contents("php://input"));

    $usuario->nome = $data->nome;
    $usuario->email = $data->email;
    $usuario->usuario = $data->usuario;
    $usuario->senha = sha1(md5($data->senha));
    $usuario->data_inscricao = date('Y-m-d H:i:s');

    if ($usuario->create()) {
        echo "Usuário foi criado.";
    } else {
        echo "Usuário não foi criado.";
    }

?>