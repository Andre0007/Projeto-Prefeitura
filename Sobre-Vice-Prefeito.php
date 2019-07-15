<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'Governo'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Vice Prefeito'; include './App_Includes/Header.php'; ?>  
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>

        <section id="PerfilGoverno" ng-init="getListGoverno('Vice')">
            
            <div class="container">
                <div class="row profile">
                    <div class="col-md-3">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic blog_img text-center">
                                <img ng-src="{{imagem_perfil === '' ? 'App_Imagens/sem_foto_masculino.jpg' : imagem_perfil}}" class="img-thumbnail" alt="{{nome}}">
                            </div>

                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-home"></i>
                                            Sobre </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100012936759128&fref=ts" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                            Facebook </a>
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