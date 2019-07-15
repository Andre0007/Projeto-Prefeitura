<?php
    include_once '../../../Model/class-conexao.php';
    include_once '../../../Model/prefeitura/governo-model.php';

    $database = new conexaoBD();
    $db = $database->getConnection();

    $gov = new Governo($db);

    $data = json_decode(file_get_contents("php://input"));
    
    if($data->categoria == "Pref"){
        $cargo_governo = "Prefeito"; 
    }else if($data->categoria == "Vice"){
        $cargo_governo = "Vice-Prefeito"; 
    }else if($data->categoria == "Gov"){
        $cargo_governo = "Secretaria do Governo"; 
    }else if($data->categoria == "Adm"){
        $cargo_governo = "Secretaria de Administração, Tecnologia e Modernização"; 
    }else if($data->categoria == "Proc"){
        $cargo_governo = "Procuradoria Geral do Município"; 
    }else if($data->categoria == "Fazen"){
        $cargo_governo = "Secretaria da Fazenda"; 
    }else if($data->categoria == "Sau"){
        $cargo_governo = "Secretaria da Saúde"; 
    }else if($data->categoria == "Edu"){
        $cargo_governo = "Secretaria da Educação"; 
    }else if($data->categoria == "Espo"){
        $cargo_governo = "Secretaria do Esporte, Cultura e Lazer"; 
    }else if($data->categoria == "DesenS"){
        $cargo_governo = "Secretaria de Desenvolvimento Social"; 
    }else if($data->categoria == "Obras"){
        $cargo_governo = "Secretaria de Obras e Serviços"; 
    }else if($data->categoria == "Hab"){
        $cargo_governo = "Secretaria de Habitação, Regularização Fundiária e Planejamento Urbano"; 
    }else if($data->categoria == "Meio"){
        $cargo_governo = "Secretaria do Meio Ambiente"; 
    }else if($data->categoria == "DesenE"){
        $cargo_governo = "Secretaria de Desenvolvimento Econômico e Turismo"; 
    }else if($data->categoria == "Seguran"){
        $cargo_governo = "Secretaria de Segurança Pública, Transporte e Mobilidade Urbana"; 
    }else if($data->categoria == "Sub"){
        $cargo_governo = "Subprefeitura do Distrito de Terra Preta"; 
    }
    
    $gov->id = $data->id;
    $gov->nome = $data->nome;
    $gov->descricao = $data->descricao;
    $gov->categoria = $data->categoria;
    $gov->cargo_governo = $cargo_governo;  
    $gov->imagem_perfil = $data->imagem_perfil;
    $gov->telefone_secretaria = $data->telefone_secretaria;
    $gov->endereco_secretaria = $data->endereco_secretaria;

    $gov->update();
?>