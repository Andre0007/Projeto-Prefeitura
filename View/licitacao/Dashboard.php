<?php
session_start();
require '../../Controller/login-controller/checkLicitacao-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'Dashboard'; $titulo = 'Resumo do Sistema'; include '../../App_Includes/administracao/LicitacaoHeaderManutencao.php'; ?>
    
    <body ng-controller="ControllerHome">
        <?php include '../../App_Includes/administracao/LicitacaoMenuManutencao.php'; ?> 
         
        <div class="container">
            <div class="col-md-12">
                 
                <div class="DashboardLicitacao">
                    
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> <b>Total de Downloads dos Arquivos Ativos</b> <i class="fa fa-desktop pull-right"></i></div>                      
                            
                            <div class="table-responsive PainelRolagem">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>
                                            <th>Titulo do Arquivo</th>
                                            <th>Downloads</th>
                                        </tr>
                                    </thead>
                                    <tbody ng-init="ListContadorDownloads()">
                                        <tr ng-repeat="poo in ContadorDownloads">
                                            <td>{{poo.nome_arquivo}}</td>
                                            <td class="text-center">{{poo.total_downloads}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>  
                    </div>                  
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">  <b>Resumo do Sistema</b> <i class="fa fa-bar-chart pull-right"></i></div>                      
                            <ul class="list-group" ng-init="readAll()">
                                <li class="list-group-item">Total de Downloads: <b>{{count_downloads}}</b> </li>
                                <li class="list-group-item">Total de Pessoas Físicas: <b>{{count_cpf}}</b> </li>
                                <li class="list-group-item">Total de Pessoas Jurídicas: <b>{{count_cnpj}}</b> </li>
                                <li class="list-group-item">Total de Registros de Download Ativados: <b>{{count_ativados_download}}</b> </li>
                                <li class="list-group-item">Total de Registros de Download  Desativados: <b>{{count_desativado_download}}</b> </li>                        
                                <li class="list-group-item">Total de Arquivos Ativados para Download: <b>{{count_ativados_arquivos}}</b> </li>
                                <li class="list-group-item">Total de Arquivos Desativados para Download: <b>{{count_desativado_arquivos}}</b> </li>
                            </ul>                           
                        </div>  
                    </div>
                    
                </div>
            
            </div> 
        </div>
        
        <?php include '../../App_Includes/administracao/FooterAdministracao.php'; ?>
    </body>
</html>