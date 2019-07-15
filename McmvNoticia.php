<?php 
    $redirect = "lista-noticias";
    echo empty($_GET['id']) ? header("location:$redirect") : ""; session_start(); 
    $pagina = 'McmvNoticia';   
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp" ng-controller="ControllerHabitacao">
    <head ng-init="readMcmvArtigo(<?php echo $_GET['id']; ?>)">   
        <?php 
            $ngDescricao = "{{subtitulo}}"; 
            $ngTitulo = "{{titulo}}";
            $ngImagemCapa = "{{imagem_capa}}";
        ?>        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $ngDescricao ?>"/>
        <meta name="keywords" content="Mairiporã, Prefeitura de Mairiporã, Prefeitura Municipal de Mairiporã, Prefeitura, Nova Gestão, Legislação prefeitura, imprensa oficial mairiporã, minha casa minha vida mairiporã, noticias mairiporã, prefeitura, Mairiporã-SP" />
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="Prefeitura Municipal de Mairiporã"/>
        <meta property="og:title" content="Prefeitura Municipal de Mairiporã">
        <meta property="og:type" content="website">        
        <meta property="og:image" content="<?php echo $ngImagemCapa ?>">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="Prefeitura Municipal de Mairiporã"/>      
        <meta property="og:title" content="<?php echo $ngTitulo ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.mairipora.sp.gov.br/McmvNoticia.php?id={{id}}">
        <meta property="fb:app_id" content="817123998439813">
        <meta property="og:description" content="<?php echo $ngDescricao ?>" />       
        <meta name="twitter:card" content="summary_large_image">       
        <meta name="twitter:title" content="<?php echo $ngTitulo ?>">
        <meta name="twitter:description" content="<?php echo $ngDescricao ?>">
        <meta name="twitter:image" content="<?php echo $ngImagemCapa ?>">      
        <title> {{titulo}} | Prefeitura de Mairiporã</title>   
        <link href="App_Css/Normalize.css" rel="stylesheet">
        <link href="App_Bootstrap/Framework-Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="App_Bootstrap/Fonts-Bootstrap/css/font-awesome.min.css" rel="stylesheet">
        <link href="App_Css/slick.css" rel="stylesheet">  
        <link href="App_Css/animate.css" rel="stylesheet">  
        <link href="App_Css/themes/lite-blue-theme.css" id="switcher" rel="stylesheet">
        <link href="App_Css/EstiloVelho.css" rel="stylesheet">
        <link href="App_Css/custom-bootstrap.css" rel="stylesheet">
        <link href="App_Imagens/favicon.png" rel="shortcut icon" type="image/icon" />   
        <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
        <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head> 
    <body>
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?>

        <section id="courseArchive" class="ConteudoSection">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10">
                        <div class="courseArchive_content">
                           
                            
                            <div class="row">
                                
                                <div class="col-lg-12 col-12 col-sm-12">
                                    <div class="single_blog">
                                        <div class="blogimg_container text-center">                                           
                                            <img class="img-thumbnail" ng-src="{{imagem_capa}}"> 
                                        </div>   
                                        <h2 class="blog_title res_title">{{titulo}}</h2>
                                        <h4 class="blog_title res_subtitle">{{subtitulo}}</h4><br>
                                        <div class="blog_commentbox">
                                            <p><i class="fa fa-calendar"></i> {{data_postagem}}</p>
                                        </div>
                                        <p ng-bind-html="descricao"> </p>
                                    </div>
           
                                </div>
                                             
                            </div>
                              
                             
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include './App_Includes/Footer.php'; ?>     
    </body>
</html>