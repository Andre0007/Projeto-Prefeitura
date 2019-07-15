<?php 
    //Variaveis
    $data = json_decode(file_get_contents("php://input"));

    $nome =  $data->nome;
    $emailForm = $data->email;
    $opcoes = $data->departamento;
    $assunto = $data->assunto;
    $mensagem = $data->mensagem;
    
    //Departamentos
    if($opcoes == 1){//Gestão Publica
        $emailenviar = "administracao@mairipora.sp.gov.br";
    }else if($opcoes == 2){//Informática
        $emailenviar = "sa.cpd@mairipora.sp.gov.br";
    }else if($opcoes == 3){//Assistência Social
        $emailenviar = "assistenciasocial@mairipora.sp.gov.br";
    }else if($opcoes == 4){//Cultura
        $emailenviar = "cultura@mairipora.sp.gov.br";
    }else if($opcoes == 5){//Educação
        $emailenviar = "educacao@mairipora.sp.gov.br";
    }else if($opcoes == 6){//Esportes
        $emailenviar = "esportes@mairipora.sp.gov.br";
    }else if($opcoes == 7){//Fazenda
        $emailenviar = "fazenda@mairipora.sp.gov.br";
    }else if($opcoes == 8){//Governo
        $emailenviar = "governo@mairipora.sp.gov.br";
    }else if($opcoes == 9){//Juridico
        $emailenviar = "juridico@mairipora.sp.gov.br";
    }else if($opcoes == 10){//Meio Ambiente e Turismo
        $emailenviar = "turismo@mairipora.sp.gov.br";
    }else if($opcoes == 11){//Obras
        $emailenviar = "obras@mairipora.sp.gov.br";
    }else if($opcoes == 12){//Recursos Humanos
        $emailenviar = "rhpmm@mairipora.sp.gov.br";
    }else if($opcoes == 13){//Relações Institucionais
        $emailenviar = "relacoesinstitucionais@mairipora.sp.gov.br";
    }else if($opcoes == 14){//Saúde
        $emailenviar = "saude@mairipora.sp.gov.br";
    }else if($opcoes == 15){//Sub Terra Preta
        $emailenviar = "terrapreta@mairipora.sp.gov.br";
    }else if($opcoes == 16){//Coor. de Mobilidade e Segurança
        $emailenviar = "transito@mairipora.sp.gov.br";
    }elseif($opcoes == 17){//Coor. de Comunicação
        $emailenviar = "imprensa@mairipora.sp.gov.br";
    }
    
    //Corpo e-mail
    $CorpoMensagem = "
        <div class='Mensagem'>
            $nome, $emailForm
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