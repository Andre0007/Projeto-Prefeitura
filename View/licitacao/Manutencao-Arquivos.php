<?php
session_start();
require '../../Controller/login-controller/checkLicitacao-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'ManutencaoArquivos'; $titulo = 'Manutenção Arquivos'; include '../../App_Includes/administracao/LicitacaoHeaderManutencao.php'; ?>
    
    <body ng-controller="ControllerArquivos">       
        <?php include '../../App_Includes/administracao/LicitacaoMenuManutencao.php'; ?> 
          
        <div class="container">
            <h3 class="page-header">Manutenção Arquivos</h3>

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
                                    <th>Nome Titulo</th>
                                    <th>Categoria</th>
                                    <th>Ano</th>
                                    <th>Tipo</th>
                                    <th class="text-center">Alterar</th>
                                    <th class="text-center">Deletar</th>
                                </tr> 
                            </thead>
                            <tbody ng-init="getAll()">
                                <tr dir-paginate="poo in listaArquivo | filter:search | itemsPerPage:15" pagination-id="prodx">
                                    <td>{{ poo.nome_arquivo}}</td>
                                    <td>{{ poo.categoria}}</td>
                                    <td>{{ poo.ano}}</td> 
                                    <td>{{ poo.tipo}}</td> 
                                    <td class="text-center">
                                        <a ng-click="readOne(poo.id_arquivo)" class="btn btn-warning"><em class="fa fa-pencil"></em></a>                                                              
                                    </td> 
                                    <td class="text-center">
                                        <a ng-click="deleteArquivo(poo.id_arquivo)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
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
                                            <label class="cols-sm-2 control-label">Tipo</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                                    <select class="form-control" ng-options="tipo for tipo in TiposArquivo" name="IDTipoSelected" id="IDTipoSelected" ng-model="StringTipoSelected">
                                                        <option value="">Selecione o Tipo de Arquivo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Categoria</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group" ng-init="ListCategoria()">
                                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                                    <select ng-options="item.id_categoria as item.descricao for item in categorias" ng-model="IDcategoriaSelected" class="form-control">
                                                        <option value="">Selecione o Tipo de Categoria</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">URL</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                    <input type="text" class="form-control" ng-model="url_arquivo" maxlength="140" id="nome_titulo" placeholder="Cole aqui o caminho do arquivo upload"/>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Nome</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                    <input type="text" class="form-control" ng-model="nome_arquivo" maxlength="170" id="nome_titulo"  placeholder="Nome do arquivo"/>
                                                </div>
                                            </div>
                                        </div>                                           
                                        <div class="form-group">
                                            <label class="cols-sm-2 control-label">Ano</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" class="form-control" maxlength="4" ng-model="ano" id="ano" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a id="btn-create" class="btn btn-primary" ng-click="createArquivo()">Publicar</a>

                                        <a id="btn-update" class="btn btn-warning" ng-click="updateArquivo()">Alterar</a>

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