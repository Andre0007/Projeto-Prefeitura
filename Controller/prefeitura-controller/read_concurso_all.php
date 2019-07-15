<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../Model/class-conexao.php';
    include_once '../../Model/prefeitura/lista-concurso-estagiario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $concurso = new Concurso($db);

    $stmt = $concurso->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {


        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"nome_titulo":"' . $nome_titulo . '",';
            $data .= '"url":"' . $url . '",';
            $data .= '"data_lancamento":"' . $data_lancamento . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' . $data . ']}';

?>