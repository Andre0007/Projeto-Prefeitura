<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" /> 
    <meta name="Googlebot" content="noindex, nofollow" />
    <title><?php echo$titulo ?> | Prefeitura de Mairiporã</title>
    <link href="../../../App_Css/Normalize.css" rel="stylesheet" />
    <link href="../../../App_Bootstrap/Framework-Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../App_Bootstrap/Fonts-Bootstrap/css/font-awesome.min.css" rel="stylesheet" />   
    <link href="../../../App_Css/EstiloOuvidoriaCidadao.css" rel="stylesheet" />
    <?php
        if($pagina == 'SobreOuvidor'){
            echo'<link href="../../../App_Css/PerfilGoverno.css" rel="stylesheet">';
        }else if($pagina == 'ListaReclamacoes'){
            echo'<link href="../../../App_Css/table-manutencao.css" rel="stylesheet">';
        }
    ?>
    <link href="../../../App_Imagens/favicon.png" rel="shortcut icon" type="image/icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>