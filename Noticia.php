<?php 
    $redirect = "lista-noticias";
    echo empty($_GET['id']) || !is_numeric($_GET['id']) ? header("location:$redirect") : ""; session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp" ng-controller="ControllerPrefeitura">
    
    <?php $pagina = 'Noticia'; include './App_Includes/TagSeo.php';?>
    
    <?php include './App_Includes/Header.php';?>
    
    <body ng-init="readArtigo(<?php echo $_GET['id']; ?>)">
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?>

        <main class="ConteudoCentral">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10">
                        <div class="courseArchive_content">
                           
                            <div class="row">
                                
                                <div class="col-lg-12 col-12 col-sm-12 text-center">
                                    <div class="single_blog">                                          
                                        <h2 class="blog_title res_title">{{titulo}}</h2>
                                        <h5 class="blog_title res_subtitle">{{subtitulo}}</h4>
                                        <hr>
                                                                             
                                        <div class="col-md-5 col-sm-5 col-xs-6 blog_commentbox text-left">                                          
                                            <p><i class="fa fa-calendar"></i> {{data_postagem}}</p>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-6 text-right">
                                            <ul class="rrssb-buttons clearfix"> 
                                                <li class="rrssb-facebook">
                                                  <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.mairipora.sp.gov.br/Noticia.php?id=<?php echo$_GET['id'] ?>" class="popup">
                                                    <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg></span>
                                                    <span class="rrssb-text">Facebook</span>
                                                  </a>
                                                </li>
                                                <li class="rrssb-googleplus" data-initwidth="14.285714285714286" data-size="58" style="width: 14.2857%;">
                                                    <a href="https://plus.google.com/share?url=http://www.mairipora.sp.gov.br/Noticia.php?id=<?php echo$_GET['id'] ?>" class="popup"><span class="rrssb-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"></path></svg></span>
                                                        <span class="rrssb-text">Google +</span>
                                                    </a>
                                                </li>                                                                                             
                                                <li class="rrssb-twitter">
                                                  <a href="https://twitter.com/intent/tweet?text=http://www.mairipora.sp.gov.br/Noticia.php?id=<?php echo$_GET['id'] ?>"
                                                  class="popup">
                                                    <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg></span>
                                                    <span class="rrssb-text">Twitter</span>
                                                  </a>
                                                </li>
                                            </ul>
                                        </div> 
                                        <br><br><br>
                                        
                                        <div class="blogimg_container">                                           
                                            <img class="img-responsive CentralizarSemThumb" ng-src="{{imagem_capa}}"> 
                                        </div>
                                        <br>
                                        
                                        <p class="text-justify" ng-bind-html="descricao"> </p>
                                    </div>
           
                                </div>
                                             
                            </div>
                            
                            
                            <div class="related_post" ng-init="getPostAntigos(<?php echo $_GET['id']; ?>)">
                                <h2>Últimas Postagens</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6" ng-repeat="OldTwo in postAntigos">
                                        <div class="single_blog_archive wow fadeInUp">
                                            <div class="blogimg_container">
                                                <a class="blog_img" ng-href="Noticia.php?id={{OldTwo.id}}">
                                                    <img ng-src="{{OldTwo.imagem_capa}}">
                                                </a>
                                            </div>
                                            <h3 class="blog_title"><a ng-href="Noticia.php?id={{OldTwo.id}}">{{OldTwo.titulo}}</a></h3>
                                            
                                            <p class="blog_summary">{{OldTwo.subtitulo}}</p>
                                            <div class="blog_commentbox">
                                                <p><i class="fa fa-calendar"></i>{{OldTwo.data_postagem}}</p>
                                            </div>
                                            <a ng-href="Noticia.php?id={{OldTwo.id}}" class="blog_readmore Negrito">Leia Mais</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>                             
                             
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <?php include './App_Includes/Footer.php'; ?>       
    </body>
</html>