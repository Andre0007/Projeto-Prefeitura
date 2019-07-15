<?php

    session_start();
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/licitacao/download-model.php';
    
    $database = new conexaoBD();
    $db = $database->getConnection();

    $download = new Download($db);
    
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $opcao = isset($_POST['options']) ? $_POST['options'] : '';
    $cpfcnpj = isset($_POST['cpfcnpj']) ? $_POST['cpfcnpj'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    
    $url = "../../../Painel-Baixar-Arquivo.php?id=$id";
    
    
    //============Validação em servidor===============
    
    //==Verifica se entrou sem mascara no cpf/cnpj e insere==//   
    if($opcao == "CPF" && strlen($cpfcnpj) == 11){
       $cpfcnpj = mask($cpfcnpj, '##.###.###/####-##');
    }else if($opcao == "CNPJ" && strlen($cpfcnpj) == 14){
       $cpfcnpj = mask($cpfcnpj, '###.###.###-##');
    }
    
    function mask($val, $mask)   
    {
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++)
        {
            if($mask[$i] == '#')
            {
                if(isset($val[$k]))
                $maskared .= $val[$k++];
            }else{
                if(isset($mask[$i]))
                $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }  
    
    //==Email==//
    function validaEmail($email) {
        $conta = "^[a-zA-Z0-9\._-]+@";
        $domino = "[a-zA-Z0-9\._-]+.";
        $extensao = "([a-zA-Z]{2,4})$";
        $pattern = $conta.$domino.$extensao;
    if (ereg($pattern, $email))
        return true;
    else
        return false;
    }
    $input = $email;
    
    //==CPF==//
    function validaCPF($cpf) {
 
        // Verifica se um número foi informado
        if(empty($cpf)) {
            return false;
        }

        // Elimina possivel mascara
        $cpf = ereg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        // Verifica se o numero de digitos informados é igual a 11 
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
         // Calcula os digitos verificadores para verificar se o
         // CPF é válido
         } else {   

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }
    
    //==CNPJ==//
    function validaCNPJ($cnpj)
    {
        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
        // Valida tamanho
        if (strlen($cnpj) != 14)
            return false;
        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
        {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
            return false;
        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
        {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
    }
    
    
    if (empty($nome) && empty($cpfcnpj) && empty($email) && empty($telefone))
    {
        $_SESSION['count_erro'] = 1;
        $_SESSION['Compos_vazio'] = "Informe todos os campos antes de baixar.";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if (empty($nome))
    {
        $_SESSION['count_erro'] = 2;
        $_SESSION['Compos_vazio'] = "Informe o <b>nome</b>";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if (empty($cpfcnpj))
    {
        $_SESSION['count_erro'] = 3;
        $_SESSION['Compos_vazio'] = "Informe o <b>CPF ou CNPJ</b>";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if ($opcao == "CPF" && !validaCPF($cpfcnpj))
    {
        $_SESSION['count_erro'] = 4;
        $_SESSION['Compos_vazio'] = "O <b>CPF</b> inserido é invalido!";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if ($opcao == "CNPJ" && !validaCNPJ($cpfcnpj))
    {
        $_SESSION['count_erro'] = 5;
        $_SESSION['Compos_vazio'] = "O <b>CNPJ</b> inserido é invalido!";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if (empty($email))
    {
        $_SESSION['count_erro'] = 6;
        $_SESSION['Compos_vazio'] = "Informe o <b>e-mail</b>";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if (!validaEmail($input)) {
        $_SESSION['count_erro'] = 7;
        $_SESSION['Compos_vazio'] = "O <b>e-mail</b> inserido é invalido!";
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if (empty($telefone))
    {
        $_SESSION['count_erro'] = 8;
        $_SESSION['Compos_vazio'] = "Informe o <b>telefone</b>";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else if (!empty($nome) && !empty($cpfcnpj) && !empty($email) && !empty($telefone)){    
        
        //Insere os dados para registro do download
        $download->cpf_cnpj = $cpfcnpj;
        $download->nome = $nome;
        $download->email = $email;
        $download->telefone = $telefone;
        $download->id_arquivo = $id;
        
        if ($download->create()) {           
            
            set_time_limit(0);

            //Realiza um select e retorna os dados do arquivo especifico                       
            $arquivo = new Download($db);
            $arquivo->id_arquivo = $id;
            $arquivo->readOne();

            $arquivoURLNome = $arquivo->nome_arquivo_url;           
            $arquivoLocal = '../../../'.$arquivoURLNome;

            $novoNome = str_replace('App_Uploads/Licitacoes/','', $arquivoURLNome);

            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment;filename="'.$novoNome.'"');
            header('Content-Type: application/octet-stream');
            header('Content-Transfer-Encoding: binary');
            
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Expires: 0');

            readfile($arquivoLocal);
            
        } else {

        }
    }
?>