<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/habitacao/MCMVListaComplementar-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvListCom = new McmvListaComplementar($db);

    $stmt = $McmvListCom->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {


        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"titulo":"' . $titulo . '",';
            $data .= '"data_postagem":"' . $data_postagem . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' . $data . ']}';
?>