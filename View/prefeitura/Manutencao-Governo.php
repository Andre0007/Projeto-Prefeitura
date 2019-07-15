<?php
    session_start();
    require '../../Controller/login-controller/checkPrefeitura-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    <?php $pagina = 'MGoverno'; $titulo = 'Manutenção Governo'; include '../../App_Includes/administracao/PrefeituraHeaderManutencao.php'; ?>

    <body ng-controller="ControllerGoverno">

        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">

        <?php include '../../App_Includes/administracao/PrefeituraMenuManutencao.php'; ?>

            <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12" id="content">
                        
                        <h1 class="page-header">Manutenção Governo</h1>

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
                                                <th>Cargo</th>
                                                <th class="text-center">Alterar</th>
                                                <th class="text-center">Deletar</th>
                                            </tr> 
                                        </thead>
                                        <tbody ng-init="getAll()">
                                            <tr dir-paginate="poo in gestores | filter:search | itemsPerPage:15" pagination-id="prodx">                                        
                                                <td class="text-center">{{ poo.id}}</td>
                                                <td>{{ poo.nome}}</td>
                                                <td>{{ poo.cargo_governo}}</td>  
                                                <td class="text-center">
                                                    <a ng-click="readOne(poo.id)" class="btn btn-warning"><em class="fa fa-pencil"></em></a>                                                              
                                                </td> 
                                                <td class="text-center">
                                                    <a ng-click="deleteGoverno(poo.id)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
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
                                                        <label class="cols-sm-2 control-label">Nome</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                                                <input type="text" class="form-control" ng-model="nome" id="nome"  placeholder="Digite o Nome da [Figura pública] Gestão Atual"/>
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
                                                        <label class="cols-sm-2 control-label">Cargo</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                                                <select class="form-control" name="IDCargoSelected" id="IDCargoSelected" ng-model="StringCargoSelected">
                                                                    <option value="">Selecione um cargo</option>
                                                                    <option value="Pref">Prefeito</option>
                                                                    <option value="Vice">Vice-Prefeito</option>
                                                                    <option value="Gov">Secretaria do Governo</option>
                                                                    <option value="Adm">Secretaria de Administração, Tecnologia e Modernização</option>
                                                                    <option value="Proc">Procuradoria Geral do Município</option>
                                                                    <option value="Fazen">Secretaria da Fazenda</option>
                                                                    <option value="Sau">Secretaria da Saúde</option>
                                                                    <option value="Edu">Secretaria da Educação</option>
                                                                    <option value="Espo">Secretaria do Esporte, Cultura e Lazer</option>
                                                                    <option value="DesenS">Secretaria de Desenvolvimento Social</option>
                                                                    <option value="Obras">Secretaria de Obras e Serviços</option>
                                                                    <option value="Hab">Secretaria de Habitação, Regularização Fundiária e Planejamento Urbano</option>
                                                                    <option value="Meio">Secretaria do Meio Ambiente</option>
                                                                    <option value="DesenE">Secretaria de Desenvolvimento Econômico e Turismo</option>
                                                                    <option value="Seguran">Secretaria de Segurança Pública, Transporte e Mobilidade Urbana</option>
                                                                    <option value="Sub">Subprefeitura do Distrito de Terra Preta</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                                                                                                                                 
                                                    
                                                    <div class="form-group">
                                                        <label class="cols-sm-2 control-label">Url Imagem Perfil</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                                                <input type="text" class="form-control" ng-model="imagem_perfil" id="imagem_capa" placeholder="Cole a Url da Imagem"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="cols-sm-2 control-label">Telefone do Escritório</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                <input type="text" class="form-control" ng-model="telefone_secretaria" maxlength="30" id="telefone" placeholder="Digite o Telefone do Escritório"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="cols-sm-2 control-label">Endereço</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                <input type="text" class="form-control" ng-model="endereco_secretaria" maxlength="50" id="endereco" placeholder="Digite o Endereço do Escritório"/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <a id="btn-create" class="btn btn-primary" ng-click="createGoverno()">Publicar</a>

                                                    <a id="btn-update" class="btn btn-warning" ng-click="updateGoverno()">Alterar</a>

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