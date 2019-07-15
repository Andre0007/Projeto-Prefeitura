<?php
session_start();
require '../../Controller/login-controller/checkPrefeitura-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'MImprensa'; $titulo = 'Manutenção Imprensa'; include '../../App_Includes/administracao/PrefeituraHeaderManutencao.php'; ?>

    <body ng-controller="ControllerImprensa">

        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">

        <?php include '../../App_Includes/administracao/PrefeituraMenuManutencao.php'; ?> 

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12" id="content">

                        <h1 class="page-header">Manutenção Imprensa</h1>

                        <div class="col-md-12">

                            <div class="panel panel-primary panel-table">
                                <div class="panel-heading">
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
                                            <button type="button" data-toggle="modal" data-target="#myModal" ng-click="showCreateForm()" class="btn btn-sm btn-primary btn-create">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-striped table-bordered table-list">
                                        <thead>
                                            <tr>                                       
                                                <th class="text-center">Número Edição</th>
                                                <th class="text-center">Data Edição Lançamento</th>
                                                <th class="text-center">Alterar</th>
                                                <th class="text-center">Deletar</th>
                                            </tr> 
                                        </thead>
                                        <tbody ng-init="getAll()">
                                            <tr dir-paginate="poo in imprensa | filter:search | itemsPerPage:10" pagination-id="prodx">                                        
                                                <td class="text-center">{{ poo.numero}}</td>
                                                <td class="text-center">{{ poo.data_lancamento}}</td>  
                                                <td class="text-center">
                                                    <a ng-click="readOne(poo.id)" class="btn btn-warning"><em class="fa fa-pencil"></em></a>                                                              
                                                </td> 
                                                <td class="text-center">
                                                    <a ng-click="deleteImprensa(poo.id)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- modal  -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                               
                                                    <h4 id="modal-title"></h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label class="cols-sm-2 control-label">Número</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                                <input type="text" class="form-control" ng-model="numero" id="numero" placeholder="Numero Edição"/>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="form-group">
                                                        <label class="cols-sm-2 control-label">URL PDF</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                                <input type="text" class="form-control" ng-model="url" id="url" maxlength="200" placeholder="URL do PDF"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="cols-sm-2 control-label">Data Edição Lançamento</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                                                <input type="text" class="form-control" ng-model="data_lancamento" id="data_lancamento" placeholder="Data lançamento"/>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                           

                                                </div>
                                                <div class="modal-footer">
                                                    <a id="btn-create" class="btn btn-primary" ng-click="createImprensa()">Publicar</a>

                                                    <a id="btn-update" class="btn btn-warning" ng-click="updateImprensa()">Alterar</a>

                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <dir-pagination-controls pagination-id="prodx" boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="dir_pagination.tpl.html"></dir-pagination-controls>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!-- /.row -->              
                </div><!-- /.container-fluid -->           
            </div>
        </div>
            
        </div><!-- /#wrapper -->

        <?php include '../../App_Includes/administracao/FooterAdministracao.php'; ?>    
    </body>
</html>