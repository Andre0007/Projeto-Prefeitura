<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../Model/class-conexao.php';
    include_once '../../Model/prefeitura/meio-ambiente-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $meioambiente = new MeioAmbiente($db);

    $stmt = $meioambiente->readList();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"nome_titulo":"' . $nome_titulo . '",';
            $data .= '"data_postagem":"' . $data_postagem . '",';
            $data .= '"url":"' . $url . '"';           
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' . $data . ']}';

?>