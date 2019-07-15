<!DOCTYPE html>
<html lang="pt-br">   
    
    <?php $pagina = 'ConcursoPublico'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Documentos Concurso Público'; include './App_Includes/Header.php'; ?>    
    
    <body> 
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>   

        <main class="ConteudoCentral">

            <div class="container">
                <div class="row">
                    
                    <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="col-lg-12 col-md-12"> 
                            <div class="title_area">
                                <h2 class="title_two">Concursos Públicos</h2>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <a href="lista-concursos-editais-mairipora">
                            <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                <span class="icon bg-df circle"><i class="fa fa-file-text"></i></span>
                                <h4>Processo Seletivo Editais</h4>                             
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="lista-concursos-estagiario-mairipora">
                            <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                                <span class="icon bg-df circle"><i class="fa fa-graduation-cap"></i></span>
                                <h4>Processo Seletivo Estagiários</h4>
                            </div>
                        </a>    
                    </div>                   

                </div>
            </div>

        </main>

        <?php include './App_Includes/Footer.php'; ?>  
    </body>
</html>