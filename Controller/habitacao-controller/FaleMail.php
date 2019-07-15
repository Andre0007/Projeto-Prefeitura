<?php
    //Variaveis
    $data = json_decode(file_get_contents("php://input"));

    $nome =  $data->nome;
    $emailForm = $data->email;
    $telefone = $data->telefone;
    $endereco = $data->endereco;
    $assunto = $data->assunto;
    $mensagem = $data->mensagem;
    
    $emailenviar = "habitacao@mairipora.sp.gov.br"; 
    
    //Corpo e-mail
    $CorpoMensagem = "
        <div class='Mensagem'>
            $nome, $emailForm, $telefone, $endereco.
            <br><br>
            $mensagem
        </div> "; 
    
    //Enviar
    $email_usuario = $emailForm;
    $email_remetente = $emailenviar;
    $headers = "MIME-Version: 1.1\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: $email_remetente\n";
    $headers .= "Return-Path: $email_remetente\n";
    $headers .= "Reply-To: $email_usuario\n";
    $envio = mail("$email_remetente", "$assunto", "$CorpoMensagem", $headers, "-f$email_remetente");
    
    if ($envio) {
        echo $mgm = "E-mail enviado com sucesso!";      
    } else {
        echo $mgm = "ERRO AO ENVIAR E-MAIL!";
    }
?>