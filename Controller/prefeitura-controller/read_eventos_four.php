<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../Model/class-conexao.php';
    include_once '../../Model/prefeitura/evento-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $ev = new Evento($db);

    $stmt = $ev->readEventosFour();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"title":"' . $title . '",';
            $data .= '"data_inicio":"' . $data_inicio . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';
    
?>