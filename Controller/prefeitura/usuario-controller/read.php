<?php 

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/usuario-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $usuario = new Usuario($db);

    $stmt = $usuario->readAll();
    $num = $stmt->rowCount();

    $data = "";

    if ($num > 0) {

        $x = 1;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $data .= '{';
            $data .= '"id":"' . $id . '",';
            $data .= '"nome":"' . $nome . '",';
            $data .= '"email":"' . html_entity_decode($email) . '",';
            $data .= '"usuario":"' . $usuario . '"';
            $data .= '}';

            $data .= $x < $num ? ',' : '';

            $x++;
        }
    }

    echo '{"records":[' . $data . ']}';

?>