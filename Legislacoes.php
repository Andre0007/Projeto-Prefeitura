<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'Legislacao'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Legislações'; include './App_Includes/Header.php'; ?>      
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?> 

        <main class="ConteudoCentral">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="courseArchive_content">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6" ng-repeat="lei in legislacoes | orderBy: 'ID':true">
                                    <div class="single_course wow fadeInUp">
                                        <div class="singCourse_imgarea">
                                            <img src="App_Imagens/legislacao-mairipora.jpg" alt="{{lei.nome}}" />
                                            <div class="mask">                         
                                                <a ng-href="{{lei.url}}" target="_blank" class="course_more">Visualizar</a>
                                            </div>
                                        </div>
                                        <div class="singCourse_content">
                                            <h4 class="singCourse_title"><a ng-href="{{lei.url}}" target="_blank"> <b>{{lei.nome}}</b> </a></h4>
                                            <p class="text-right">Lançado: {{lei.data}}</p>
                                        </div>                                      
                                    </div>
                                </div>                               

                            </div>
                        </div>
                    </div>

                    <!-- sidebar -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="courseArchive_sidebar">

                            <div class="single_sidebar">
                                <h2>Ultimas Notícias <span class="fa fa-angle-double-right"></span></h2>
                                <ul class="news_tab" ng-init="getUltimasNoticias()">
                                    <li ng-repeat="ultNoti in ultimasNoticias">
                                        <div class="media">
                                            <div class="media-left">
                                                <a ng-href="Noticia.php?id={{ultNoti.id}}" class="news_img">
                                                    <img ng-src="{{ultNoti.imagem_capa}}" alt="{{ultNoti.imagem_capa}}" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a ng-href="Noticia.php?id={{ultNoti.id}}">{{ultNoti.titulo}}</a>
                                                <span class="feed_date">{{ultNoti.data_postagem}}</span>
                                            </div>
                                        </div>
                                    </li>                                                           
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- start course archive sidebar -->

                </div>
            </div>
        </main>

        <?php include './App_Includes/Footer.php'; ?>                  
    </body>
</html>