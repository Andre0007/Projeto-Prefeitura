<!DOCTYPE html>
<html lang="pt-br">   
    <?php $pagina = 'SobreOuvidor'; $titulo = 'Sobre o Ouvidor'; include '../App_Includes/Cidadao-Header.php'; ?>    
    
    <body> 
        <?php include_once("../../../App_Includes/analyticstracking.php") ?>

        <?php include '../App_Includes/Cidadao-Menu.php'; ?>

        <section id="Perfil" ng-init="getPerfil()">
            
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
                                           (11) 4419-8027
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
        
        <?php include '../App_Includes/Cidadao-Footer.php'; ?>  
    </body>
</html>