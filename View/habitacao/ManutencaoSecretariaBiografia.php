<?php
    session_start();
    require '../../Controller/login-controller/checkHabitacao-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'MSecBiografia'; $titulo = 'Manutenção Secretária'; include '../../App_Includes/administracao/HabitacaoHeaderManutencao.php'; ?>

    <body ng-controller="ControllerSecretariaBiografia">

        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">

        <?php include '../../App_Includes/administracao/HabitacaoMenuManutencao.php'; ?>

            <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12" id="content">                       

                        <div class="col-md-12" ng-init="readOne('Hab')">

                            <div class="form-group invisible">
                                <label class="cols-sm-2 control-label">id</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                        <input type="text" class="form-control" ng-model="id" id="id" placeholder="id" disabled/>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">Manutenção Secretária</div>
                                    <div class="panel-body">
                               
                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Nome</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                    <input type="text" class="form-control" ng-model="nome" id="nome" placeholder="Digite o Nome da [Figura pública] Gestão Atual"/>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">                                                        
                                            <div class="cols-sm-10">
                                                <div class="input-group">                                     
                                                    <div text-angular ng-model="descricao"></div>
                                                </div>
                                            </div>
                                        </div>                                                                                                                                                                                              
                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Url Imagem Perfil</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                    <input type="text" class="form-control" ng-model="imagem_perfil" id="imagem_capa" placeholder="Cole a Url da Imagem"/>
                                                </div>
                                            </div>
                                        </div>                    
                                  
                                    </div>
                                <div class="panel-footer text-right"> <a id="btn-update" class="btn btn-warning" ng-click="updateSecretario()">Alterar</a>  </div>
                            </div>                                                   
                            
                        </div>

                    </div><!-- /.row -->              
                </div><!-- /.container-fluid -->           
            </div>
        </div>
            
        </div><!-- /#wrapper -->

        <?php include '../../App_Includes/administracao/FooterHabitacaoAdministracao.php'; ?>      
    </body>
</html>