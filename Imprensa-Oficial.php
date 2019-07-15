<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'Imprensa'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Imprensa Oficial'; include './App_Includes/Header.php'; ?>   
    
        <body ng-controller="ControllerPrefeitura">
            <?php include_once("./App_Includes/analyticstracking.php") ?>

            <?php include './App_Includes/Menu.php'; ?> 

            <main class="ConteudoCentral">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-sm-8">

                            <div class="col-md-3 filtroAno">
                                <select name="filter" title="Filtro por ano" data-style="btn-primary" class="form-control" id="filter" ng-model="filter" ng-options="color for color in carColors" ng-change="changeFilter()">                               
                                    <option value="">Filtro por ano</option>
                                </select>                           
                            </div>

                            <div class="courseArchive_content">
                                <div class="row">
                                        
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Imprensa Oficial</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListImprensa()">
                                            <tr class="wow fadeInUp imprensa" ng-repeat="jor in jornais| filter: filter">
                                                <td> <a ng-href="{{jor.url}}">Edição Número: <b>{{jor.numero}}</b></a> </td>
                                                <td> <a ng-href="{{jor.url}}">{{jor.data_lancamento}}</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        
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