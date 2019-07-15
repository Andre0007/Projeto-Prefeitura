<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/meio-ambiente-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $meioAmbiente = new MeioAmbiente($db);

    $stmt = $meioAmbiente->readAll();
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
            $data .= '"data_postagem":"' . $data_postagem . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' . $data . ']}';

?>