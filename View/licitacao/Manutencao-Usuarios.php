<?php
session_start();
require '../../Controller/login-controller/checkLicitacao-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'ManutencaoUsuarios'; $titulo = 'Manutenção Usuários'; include '../../App_Includes/administracao/LicitacaoHeaderManutencao.php'; ?>

    <body ng-controller="ControllerUsuarios">
        <?php include '../../App_Includes/administracao/LicitacaoMenuManutencao.php'; ?> 

        <div class="container">
            <h3 class="page-header">Manutenção Usuários</h3>

            <div class="table-responsive col-md-12">

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
                                <button type="button" data-toggle="modal" data-target="#myModal" ng-click="showCreateForm()" class="btn btn-sm btn-primary btn-create"> <i class="glyphicon glyphicon-plus"></i> Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>                                       
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Usuário</th>
                                    <th class="text-center">Alterar</th>
                                    <th class="text-center">Deletar</th>
                                </tr> 
                            </thead>
                            <tbody ng-init="getAll()">
                                <tr dir-paginate="poo in usuarios | filter:search | itemsPerPage:5" pagination-id="prodx">
                                    <td>{{ poo.nome}}</td>
                                    <td>{{ poo.email}}</td>
                                    <td>{{ poo.usuario}}</td>  
                                    <td class="text-center">
                                        <a ng-click="readOne(poo.id)" class="btn btn-warning"><em class="fa fa-pencil"></em></a>                                                              
                                    </td> 
                                    <td class="text-center">
                                        <a ng-click="deleteUsuario(poo.id)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- modal for for creating new product -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                               
                                        <h4 id="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Nome</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                    <input type="text" class="form-control" ng-model="nome" id="nome"  placeholder="Nome completo"/>
                                                </div>
                                            </div>
                                        </div>                                           
                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">E-mail</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                                    <input type="text" class="form-control" ng-model="email" id="email"  placeholder="Email"/>
                                                </div>
                                            </div>
                                        </div>                                          
                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Usuário</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                                    <input type="text" class="form-control" ng-model="usuario" id="usuario"  placeholder="Nome de usuario">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Senha</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    <input type="password" class="form-control" ng-model="senha" id="senha"  placeholder="Senha Temporaria">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a id="btn-create" class="btn btn-primary" ng-click="createUsuario()">Salvar</a>

                                        <a id="btn-update" class="btn btn-warning" ng-click="updateUsuario()">Alterar</a>

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
        </div>

       <?php include '../../App_Includes/administracao/FooterAdministracao.php'; ?>
    </body>
</html>