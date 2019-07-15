<?php 
    $redirect = "lista-secretarias";
    echo empty($_GET['cat']) ? header("location:$redirect") : ""; session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'Governo'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Governo'; include './App_Includes/Header.php'; ?>  
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>

        <section id="PerfilGoverno" ng-init="getListGoverno('<?php echo $_GET['cat']; ?>')">
            
            <div class="container">
                <div class="row profile">
                    <div class="col-md-3">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic blog_img text-center">
                                <img ng-src="{{imagem_perfil === '' ? 'App_Imagens/sem_foto.jpg' : imagem_perfil}}" class="img-thumbnail" alt="{{nome}}">                                
                            </div>
                            <!-- END SIDEBAR USERPIC -->

                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-home"></i>
                                            Sobre </a>
                                    </li>
                                    <li>
                                        <a href="#" style="font-size: 12px">
                                           <i class="glyphicon glyphicon-earphone"></i>
                                           {{telefone_secretaria}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" style="font-size: 12px">
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                            {{endereco_secretaria}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-content">
                            
                            <div class="Titulo page-header">
                               <h3>{{nome}}</h3>
                            </div>
                            
                            <div class="Texto" ng-bind-html="descricao">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    <?php include './App_Includes/Footer.php'; ?>
    </body>
</html>