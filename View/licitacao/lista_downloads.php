<?php
session_start();
require '../../Controller/login-controller/checkLicitacao-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'ListaDownload'; $titulo = 'Lista de Downloads'; include '../../App_Includes/administracao/LicitacaoHeaderManutencao.php'; ?>     
    
    <body ng-controller="ControllerDownloads">       
        <?php include '../../App_Includes/administracao/LicitacaoMenuManutencao.php'; ?> 
            
        <div class="container-fluid">
            <h3 class="page-header noPrint">Lista de Downloads</h3>

            <div class="col-md-12">

                <div class="panel panel-primary panel-table">
                    <div class="panel-heading noPrint">
                        <div class="row">
                            <div class="col col-xs-4 col-md-4">
                                <h3 class="panel-title Negrito">Painel de Controle</h3>
                            </div>

                            <div class="col-xs-4 col-md-4">
                                <div id="imaginary_container"> 
                                    <div class="input-group stylish-input-group">
                                        <input type="text" ng-model="search" class="form-control"  placeholder="Pesquisar..." >
                                        <span class="input-group-addon">                                               
                                            <span class="glyphicon glyphicon-search"></span>                                           
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-xs-4 col-md-4 text-right">
                               <a class="btn btn-primary" value="Print" onclick="window.print();"> <i class="fa fa-print"></i> </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                                               
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>  
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF/CNPJ</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Pregão</th>
                                </tr> 
                            </thead>
                            <tbody ng-init="getAll()">
                                <tr  ng-repeat="poo in listaDownloads | filter:search">  
                                    <td>{{ poo.id}}</td>
                                    <td>{{ poo.nome}}</td>
                                    <td>{{ poo.cpf_cnpj}}</td>
                                    <td>{{ poo.email}}</td> 
                                    <td style="width: 130px;">{{ poo.telefone}}</td> 
                                    <td style="width: 400px;">{{ poo.nome_arquivo}}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>

                </div>
                
            </div>        
        </div>         
            
        <?php include '../../App_Includes/administracao/FooterAdministracao.php'; ?>
    </body>
</html>