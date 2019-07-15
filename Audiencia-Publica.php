<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">

    <?php $pagina = 'AudienciaPublica'; include './App_Includes/TagSeo.php'; ?>
    
    <?php $titulo = 'Audiência Pública'; include './App_Includes/Header.php'; ?>   
    
        <body ng-controller="ControllerPrefeitura">
            <?php include_once("./App_Includes/analyticstracking.php") ?>

            <?php include './App_Includes/Menu.php'; ?> 

            <main class="ConteudoCentral">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-sm-8">

                            <div class="courseArchive_content">
                                <div class="row">
                                                                           
                                    <div class="search">              
                                        <input type="text" id="search-input" ng-model="searchText" placeholder="Pesquisar..."/>
                                    </div>
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Descrição</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListAudienciaPublica()">
                                            <tr dir-paginate="poo in listaAudienciaPublica| filter: searchText | itemsPerPage:13" pagination-id="prodx">
                                                <td> <a ng-href="{{poo.url}}"> <b>{{poo.titulo}}</b> </a> </td>
                                                <td> <a ng-href="{{poo.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <dir-pagination-controls pagination-id="prodx" boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="dir_pagination.tpl.html"></dir-pagination-controls>
                                    </nav> 
                                        
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