<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../Model/class-conexao.php';
    include_once '../../Model/habitacao/MCMVPerguntasFrequentes-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $McmvPergun = new McmvPerguntasFrequentes($db);

    $stmt = $McmvPergun->readList();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);
            
            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"pergunta":"' . $pergunta . '",';
            $data .= '"UltimoId":"' . $UltimoId . '",';
            $data .= '"resposta":"' . $resposta . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    // json format output
    echo '{"records":[' .  $data . ']}';
?>