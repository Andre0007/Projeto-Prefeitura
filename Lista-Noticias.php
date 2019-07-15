<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'ListaNoticias'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Notícias'; include './App_Includes/Header.php'; ?>  
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?> 

        <main class="ConteudoCentral">
            <div class="container">
                <div class="row">
                    <!-- start course content -->
                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8">
                        <div class="courseArchive_content">
                            <!-- start  -->
                            <div class="row" ng-init="getListNoticias()">
                                
                                <div id="BuscaGeralNoticia" class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 CentralizarSemThumb">
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" id="search-input" class="form-control input-lg" ng-model="searchText" placeholder="Pesquisar..." />
                                                    <span class="input-group-btn">
                                                        <a class="btn btn-info btn-lg">
                                                            <i class="glyphicon glyphicon-search"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" dir-paginate="noti in noticiasList | filter:searchText | itemsPerPage:15" pagination-id="prodx">
                                    <div class="single_blog_archive wow fadeInUp">
                                        
                                        <div class="row col-md-4 col-lg-3">
                                            <div class="blogimg_container">
                                                <a ng-href="Noticia.php?id={{noti.id}}" class="blog_img">
                                                    <img ng-src="{{noti.imagem_capa}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-9">
                                            <h3 class="blog_title"><a ng-href="Noticia.php?id={{noti.id}}"> {{noti.titulo}}</a></h3>                                        
                                            <p class="blog_summary">{{noti.subtitulo}}</p>
                                            <div class="blog_commentbox">
                                                <p><i class="fa fa-calendar"></i>{{noti.data_postagem}}</p>
                                            </div>
                                            <a class="blog_readmore Negrito" ng-href="Noticia.php?id={{noti.id}}">Leia Mais</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <!-- end  -->
                            <nav>
                                <dir-pagination-controls pagination-id="prodx" boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="dir_pagination.tpl.html"></dir-pagination-controls>
                            </nav>                                                      
                            
                        </div>
                    </div>
                    <!-- End course content -->

                </div>
            </div>
        </main>

        <?php include './App_Includes/Footer.php'; ?>
    </body>
</html>