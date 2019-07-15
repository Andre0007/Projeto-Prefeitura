<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/audiencia-publica-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $audiencia = new Audiencia_Publica($db);

    $stmt = $audiencia->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"titulo":"' . $titulo . '",';
            $data .= '"url":"' . $url . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';

?>