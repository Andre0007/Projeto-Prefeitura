<?php

    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/evento-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $ev = new Evento($db);

    $data = json_decode(file_get_contents("php://input"));

    //Formatar Data Inicio
    $dataR = str_replace('/', '-', $data->data_inicio);
    $myValue = $dataR;
    $datetime = new DateTime($myValue);
    $date = $datetime->format('Y-m-d');
    $time = $datetime->format('H:i:s');
    
    //Formatar Data Termino
    $dataR2 = str_replace('/', '-', $data->data_termino);
    $myValue2 = $dataR2;
    $datetime2 = new DateTime($myValue2);
    $date2 = $datetime2->format('Y-m-d');
    $time2 = $datetime2->format('H:i:s');
    
    $ev->title = $data->title;
    $ev->data_inicio = $date.' '.$time;
    $ev->data_termino = $date2.' '.$time2;
    $Descricao = str_replace('"',"'",$data->descricao);
    $ev->descricao = $Descricao;

    $ev->create();
    
?>