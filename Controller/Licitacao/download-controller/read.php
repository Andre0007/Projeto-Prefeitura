<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/download-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $download = new Download($db);

    $stmt = $download->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"nome":"' . $nome . '",';
            $data .= '"cpf_cnpj":"' . $cpf_cnpj . '",';
            $data .= '"email":"' . $email . '",';
            $data .= '"telefone":"' . $telefone . '",';
            $data .= '"nome_arquivo":"' . $nome_arquivo . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';

?>