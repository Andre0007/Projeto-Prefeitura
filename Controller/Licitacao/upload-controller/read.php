<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/upload-arquivos-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $upload = new Upload($db);

    $stmt = $upload->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id_upload":"' . $id_upload . '",';
            $data .= '"url_arquivo":"' . $url_arquivo . '",';
            $data .= '"data_upload":"' . $data_upload . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' . $data . ']}';
?>