<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/imprensa-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $imprensa = new Imprensa($db);

    $stmt = $imprensa->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"numero":"' . $numero . '",';
            $data .= '"url":"' . $url . '",';
            $data .= '"data_lancamento":"' . $data_lancamento . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';

?>