<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/RegularizacaoNoticias-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $regNoti = new RegNoticias($db);

    $stmt = $regNoti->readUltimas();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);
            
            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"titulo":"' . $titulo . '",';
            $data .= '"subtitulo":"' . $subtitulo . '",';
            $data .= '"imagem_capa":"' . $imagem_capa . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' .  $data . ']}';
?>