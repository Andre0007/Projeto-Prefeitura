<?php
session_start();
require '../../Controller/login-controller/checkPrefeitura-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'Upload'; $titulo = 'Manutenção Upload Governo'; include '../../App_Includes/administracao/PrefeituraHeaderManutencao.php'; ?>

    <body ng-controller="ControllerUpload">

        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">

        <?php include '../../App_Includes/administracao/PrefeituraMenuManutencao.php'; ?> 

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12" id="content">
                        
                        <h1 class="page-header">Manutenção Imagens Governo</h1>

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
                                                <th class="hidden-xs text-center">ID</th>
                                                <th>Nome</th>
                                                <th>URL Imagem</th>
                                                <th>Data Upload</th>
                                                <th class="text-center">Deletar</th>
                                            </tr> 
                                        </thead>
                                        <tbody ng-init="getAllimgGoverno()">
                                            <tr dir-paginate="poo in ImgGoverno | filter:search | itemsPerPage:10" pagination-id="prodx">                                        
                                                <td class="text-center">{{ poo.id}}</td>
                                                <td>{{ poo.nome}}</td>
                                                <td>{{ poo.url}}</td>
                                                <td>{{ poo.data_upload}}</td>
                                                <td class="text-center">
                                                    <a ng-click="deleteimgGoverno(poo.id)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- modal  -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                          
                                            <form name="myForm" role="form">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                               
                                                    <h4 id="modal-title">Carregar Arquivo</h4>
                                                </div>
                                                <div class="modal-body">

                                                <div class="form-group">
                                                    <label class="cols-sm-2 control-label">Nome</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                            <input type="text" class="form-control" ng-model="nome_titulo" id="nome_titulo"  placeholder="Digite o nome [figura pública] da foto"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <div class="form-group">
                                                    <label class="cols-sm-2 control-label">Imagem</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-upload"></i></span>                                                                     

                                                            <div class="input-group image-preview">
                                                                <input type="text" class="form-control image-preview-filename" style="border-radius: 0px" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                                                <span class="input-group-btn">
                                                                    <!-- image-preview-clear button -->
                                                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                                        <span class="glyphicon glyphicon-remove"></span> Limpar
                                                                    </button>
                                                                    <!-- image-preview-input -->
                                                                    <div class="btn btn-default image-preview-input" style="border-radius: 0px 4px 4px 0px;">
                                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                                        <span class="image-preview-input-title">Selecionar</span>
                                                                        <input type="file" ngf-select ng-model="picFile" name="file" ngf-max-size="7MB" required="">
                                                                    </div>
                                                                </span>
                                                            </div><!-- /input-group image-preview [TO HERE]-->                                                                      
                                                            
                                                        </div>
                                                    </div>
                                                </div>                                        

                                                <div class="BarProgress">
                                                    <span class="progress" ng-show="picFile.progress >= 0">
                                                        <div style="width:{{picFile.progress}}%"></div>
                                                    </span>                    
                                                    <div class="progress" ng-show="picFile.progress >= 0">
                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{picFile.progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{picFile.progress}}%">
                                                           <span ng-bind="picFile.progress + '%'"></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" ng-click="submitImgGoverno(picFile)" class="btn btn-primary" id="submit" value="Publicar" />

                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </form>
                                                
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