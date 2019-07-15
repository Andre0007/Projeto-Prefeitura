<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/arquivo-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $arquivo = new Arquivo($db);

    $stmt = $arquivo->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id_arquivo":"' . $id_arquivo . '",';           
            $data .= '"nome_arquivo":"' . $nome_arquivo . '",';
            $data .= '"categoria":"' . $descricao . '",';
            $data .= '"ano":"' . $ano . '",';
            $data .= '"tipo":"' . $tipo . '",';
            $data .= '"id_categoria":"' . $id_categoria . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';

?>