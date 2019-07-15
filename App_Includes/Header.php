<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $TagDescricao ?>"/>
    <meta name="keywords" content="Mairiporã, Prefeitura de Mairiporã, Prefeitura Municipal de Mairiporã, Prefeitura, Nova Gestão, Legislação prefeitura, imprensa oficial mairiporã, minha casa minha vida mairiporã, noticias mairiporã, prefeitura, Mairiporã-SP" />  
    <meta property="og:site_name" content="Prefeitura Municipal de Mairiporã"/>
    <meta property="og:title" content="<?php echo $TagTitulo ?>">
    <meta property="og:description" content="<?php echo $TagDescricao ?>" />
    <meta property="og:type" content="website">        
    <meta property="og:image" content="<?php echo $TagImagemCapa ?>">
    <meta property="og:locale" content="pt_BR">     
    <meta property="og:url" content="http://www.mairipora.sp.gov.br/<?php echo $TagUrl ?>">
    <meta property="fb:app_id" content="817123998439813">     
    <meta name="twitter:card" content="summary_large_image">       
    <meta name="twitter:title" content="<?php echo $TagTitulo ?>">
    <meta name="twitter:description" content="<?php echo $TagDescricao ?>">
    <meta name="twitter:image" content="<?php echo $TagImagemCapa ?>">    
    <title><?php echo$titulo ?> | Prefeitura de Mairiporã</title>
    <link href="App_Css/Normalize.css" rel="stylesheet">
    <link href="App_Bootstrap/Framework-Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="App_Bootstrap/Fonts-Bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="App_Css/animate.css" rel="stylesheet">   
    <link href="App_Css/Estilo.css" rel="stylesheet">
    <link href="App_Css/Responsivo.css" rel="stylesheet">
    <link href="App_Imagens/favicon.png" rel="shortcut icon" type="image/icon" />   
    <?php
        if($pagina == 'Email' || $pagina == 'Telefone' || $pagina == 'Imprensa' || $pagina == 'Secretarias' || $pagina == 'ListaConcursoEditais' || $pagina == 'ListaConcursoEstagio' || $pagina == 'RepasseFederal' || $pagina == 'SecretariaAmbiente' || $pagina == 'AudienciaPublica'){
            echo'<link href="App_Css/table-populator.css" rel="stylesheet">';
        }else if($pagina == 'Servicos' || $pagina == 'CadFornecedores' || $pagina == 'Licitacao' || $pagina == 'ConcursoPublico'){
            echo'<link href="App_Css/MenuServicos.css" rel="stylesheet">';
        }else if($pagina == 'Governo'){
            echo'<link href="App_Css/PerfilGoverno.css" rel="stylesheet">';
        }else if($pagina == 'BaixarLicitacoes'){
            echo'<link href="App_Css/Licitacao.css" rel="stylesheet">';
        }else if($pagina == 'Calendario'){
            echo'<link href="App_Css/fullcalendar.min.css" rel="stylesheet">
                 <link href="App_Css/fullcalendar.print.min.css" rel="stylesheet" media="print">
                 <link href="App_Css/EstiloCalendar.css" rel="stylesheet">';
        }else if($pagina == 'HabitacaoDescricoes'){
            echo'<link href="App_Css/table-populator.css" rel="stylesheet">
                 <link href="App_Css/EstiloHabitacao.css" rel="stylesheet">';
        }else if($pagina == 'FaleConosco'){
            echo'<link href="App_Css/angular-toasty.min.css" rel="stylesheet" />';
        }else if($pagina == 'Noticia'){
            echo'<link href="App_Css/rrssb.min.css" rel="stylesheet" />';
        }
    ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>