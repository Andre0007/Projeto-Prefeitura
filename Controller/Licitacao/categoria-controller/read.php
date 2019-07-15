<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/categoria-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $categoria = new Categoria($db);

    $stmt = $categoria->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id_categoria":"' . $id_categoria . '",';
            $data .= '"descricao":"' . $descricao . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';

?>