<!DOCTYPE html>
<html lang="pt-br">   
    <?php $pagina = 'ListaReclamacoes'; $titulo = 'Lista de Reclamações'; include '../App_Includes/Cidadao-Header.php'; ?>    
    
    <body> 
        <?php include_once("../../../App_Includes/analyticstracking.php") ?>

        <?php include '../App_Includes/Cidadao-Menu.php'; ?>

        <div class="container" style="margin-bottom: 60px;">

            <div class="page-header text-center LetrasAzul">
                <h1>Todas reclamações registradas por <b>Thania</b> </h1>
            </div>
            
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
                                    <th class="hidden-xs text-center">Protocolo</th>
                                    <th>Assunto</th>
                                    <th>Status</th>
                                    <th>Data</th>
                                    <th class="text-center">Visuaizar</th>
                                    <th class="text-center">Ver Resposta</th>
                                </tr> 
                            </thead>
                            <tbody ng-init="getAllimgNoticias()">
                                <tr dir-paginate="poo in ImagNoticias | filter:search | itemsPerPage:15" pagination-id="prodx">                                        
                                    <td class="text-center">{{ poo.id}}</td>
                                    <td>{{ poo.assunto}}</td>
                                    <td>{{ poo.status}}</td>
                                    <td>{{ poo.data_upload}}</td>
                                    <td class="text-center">
                                        <a ng-click="GetOcorrencia(poo.id)" class="btn btn-primary"><em class="fa fa-eye"></em></a>
                                    </td>
                                    <td class="text-center">
                                        <a ng-click="GetOcorrencia(poo.id)" class="btn btn-success"><em class="fa fa-pencil"></em></a>
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
                                        <input type="submit" ng-click="submitImgNoticia(picFile)" class="btn btn-primary" id="submit" value="Publicar" />

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
            
        </div>
        
        <?php include '../App_Includes/Cidadao-Footer.php'; ?>  
    </body>
</html>