<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">   
    
    <?php $paginaT =''; $pagina = 'HabitacaoDescricoes'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Secretaria de Habitação'; include './App_Includes/Header.php'; ?>    
    
    <body ng-controller="ControllerHabitacao"> 
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?> 
        
        <div class="container ConteudoSection">
            <div class="row">
                
                <div class="jumbotron customJumbotron">
                    <div class="container">
                        <h3><b>Habitação</b></h3>
                        <p>Secretaria Municipal de Habitação, Regularização Fundiária e Planejamento Urbano</p>
                    </div>
                </div>
                
                <div id="SecMenuHabitacao" class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <span class="fa fa-briefcase"></span>A Secretaria
                                </h4>
                            </div>
                            <div id="Secretaria">
                                <div class="panel-body">
                                    <table class="table nav nav-tabs" role="tablist">                                       
                                        <tr>                                           
                                            <td>
                                                <a href="#Secretario" role="tab" data-toggle="tab" class="active" aria-controls="Secretario">Secretária</a>
                                            </td>                                                                                         
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#Equipe" role="tab" data-toggle="tab" aria-controls="Equipe">Equipe</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#Localizacao" role="tab" data-toggle="tab" aria-controls="Localizacao">Localização</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#Atribuicoes" role="tab" data-toggle="tab" aria-controls="Atribuicoes">Atribuições</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#FaleConosco" role="tab" data-toggle="tab" aria-controls="FaleConosco">Fale Conosco</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <span class="fa fa-question-circle"></span>Regularização Fundiária
                                </h4>
                            </div>
                            <div id="RegularizacaoFundiaria">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="#RegularizacaoPrograma" role="tab" data-toggle="tab" aria-controls="RegularizacaoPrograma">O que é o programa?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#RegularizacaoPriorizacao" role="tab" data-toggle="tab" aria-controls="RegularizacaoPriorizacao">Priorização?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#RegularizacaoEtapas" role="tab" data-toggle="tab" aria-controls="RegularizacaoEtapas">Etapas</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#RegularizacaoAreas" role="tab" data-toggle="tab" aria-controls="RegularizacaoAreas">Áreas</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#RegularizacaoLegislacao" role="tab" data-toggle="tab" aria-controls="RegularizacaoLegislacao">Legislação</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#RegularizacaoPerguntasFrequentes" role="tab" data-toggle="tab" aria-controls="RegularizacaoPerguntasFrequentes">Perguntas Frequentes</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#RegularizacaoNoticias" role="tab" data-toggle="tab" aria-controls="RegularizacaoNoticias">Notícias</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-toggle="tooltip" data-placement="top" title="Minha Casa Minha Vida">
                                    <span class="fa fa-home"></span>MCMV
                                </h4>
                            </div>
                            <div id="MinhaCasaMinhaVida">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVPrograma" role="tab" data-toggle="tab" aria-controls="MCMVPrograma">O que é o programa?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVCriterios" role="tab" data-toggle="tab" aria-controls="MCMVCriterios">Critérios de Atendimento</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVPerguntas" role="tab" data-toggle="tab" aria-controls="MCMVPerguntas">Perguntas Frequentes</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVHierarquizada" role="tab" data-toggle="tab" aria-controls="MCMVHierarquizada">Lista Hierarquizada</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVSuplencia" role="tab" data-toggle="tab" aria-controls="MCMVSuplencia">Lista complementar - Suplência</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVCronograma" role="tab" data-toggle="tab" aria-controls="MCMVCronograma">Cronograma</a>
                                            </td>
                                        </tr>                                      
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVNoticias" role="tab" data-toggle="tab" aria-controls="MCMVNoticias">Notícias</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#MCMVLegislacao" role="tab" data-toggle="tab" aria-controls="MCMVLegislacao">Legislação</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-toggle="tooltip" data-placement="top" title="Conselho Municipal de Habitação">
                                    <span class="fa fa-users"></span>CMH
                                </h4>
                            </div>
                            <div id="CMH">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a class="Top" href="#CMHConvocacoes" role="tab" data-toggle="tab" aria-controls="CMHConvocacao">Convocações</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#CMHLegislacao" role="tab" data-toggle="tab" aria-controls="CMHLegislacoes">Legislação</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#CMHReunioes" role="tab" data-toggle="tab" aria-controls="CMHReunioes">Ata de Reuniões</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="Top" href="#CMHResolucoes" role="tab" data-toggle="tab" aria-controls="CMHResolucoes">Resoluções</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-9 col-md-9">
                    <div class="well col-md-12">
                        
                        <div class="tab-content">
                            <!-- 1º -->
                            <div id="Secretario" class="tab-pane active" role="tabpanel" ng-init="getSecretario('Hab')">
                                <div class="col-md-8">
                                    <div class="page-header">
                                       <h3>{{nome}}</h3>
                                    </div>
                                    <div class="Texto" ng-bind-html="descricao"> </div>
                                </div>
                                <div class="col-md-4">
                                    <img ng-src="{{imagem_perfil}}" class="img-thumbnail">
                                </div>
                            </div>
                            <div id="Equipe" class="tab-pane" role="tabpanel">
                                <div class="page-header">
                                   <h3>Equipe Habitação</h3>
                                </div>
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    <div class="carousel slide" data-ride="carousel" id="quote-carousel" ng-init="getListEquipe()">
                                        
                                        <!-- Bottom Carousel Indicators -->
                                        <ol class="carousel-indicators">                                                                                      
                                            <li data-target="#quote-carousel" data-slide-to="{{equipe.id}}" ng-class="{active:!$index}" ng-repeat="equipe in equipeHabitacao">
                                                <img class="img-responsive" ng-src="{{equipe.url}}" alt="{{equipe.nome}}">
                                            </li>
                                        </ol>

                                        <!-- Carousel Slides / Quotes -->
                                        <div class="carousel-inner text-center">

                                            <div class="item" ng-class="{active:!$index}" ng-repeat="equipe in equipeHabitacao">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <p>{{equipe.descricao}}</p>
                                                            <small>{{equipe.nome}}</small>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>

                                        </div>

                                        <!-- Carousel Buttons Next/Prev -->
                                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                
                            </div>                            
                            <div id="Localizacao" class="tab-pane" role="tabpanel">
                                <div class="page-header">
                                   <h3>Localização</h3>
                                </div>
                                <blockquote class="blockquote-reverse">
                                    <address>
                                        <p><b>Endereço:</b><br>
                                        Alameda Tibiriçá, 374 - Vila Nova, 07600-000</p>
                                        <p><b>Telefone Dep. Habitação:</b> (11)4419-8045</p>
                                        <p><b>Atendimento:</b>
                                        <b style="color:#ffc106;">(8:00 AM às 17:00 PM):</b></p>
                                        <p><b>E-mail:</b>
                                        <a href="mailto:#habitacao@mairipora.sp.gov.br">habitacao@mairipora.sp.gov.br</a></p> 
                                    </address>
                                </blockquote>
                                <map>
                                    <iframe id="Mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.8396688094576!2d-46.58862203592678!3d-23.32157529892757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2aedb35596f0f3b8!2sPrefeitura+Municipal+de+Mairipor%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1483965268588" class="TamanhoIframe" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" style="border:0"></iframe>
                                </map>
                            </div>                          
                            <div id="Atribuicoes" class="tab-pane" role="tabpanel" ng-init="readAtribuicoes()">
                                <div class="page-header">
                                   <h3>Atribuições</h3>                        
                                </div>
                                <p ng-bind-html="descricaoAtribuicoes"> </p>
                            </div>
                            
                            <div id="FaleConosco" class="tab-pane" role="tabpanel">
                                <div class="page-header">
                                   <h3>Fale Conosco</h3>
                                </div>
                                <div class="panel-body">
                                    
                                    <form name="contactForm" class="form-horizontal track-event-form bv-form" id="contact-us-all" novalidate>

                                        <div class="form-group">               
                                            <div class="col-sm-6" ng-class="{ 'has-error' : contactForm.nomeCompleto.$invalid && !contactForm.nomeCompleto.$pristine }">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" name="nomeCompleto" ng-model="nomeCompleto" class="form-control" placeholder="Nome Completo" required>
                                                </div>
                                                <p ng-show="contactForm.nomeCompleto.$invalid && !contactForm.nomeCompleto.$pristine" class="help-block">Seu nome é obrigatório</p>
                                            </div>                
                                            <div class="col-sm-6" ng-class="{ 'has-error' : contactForm.email.$invalid && !contactForm.email.$pristine }">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" ng-model="email" name="email" class="form-control" placeholder="Informe seu E-mail" required>
                                                </div>
                                                <p ng-show="contactForm.email.$error.required && !contactForm.email.$pristine" class="help-block">O Campo e-mail é obrigatório</p>
                                                <p ng-show="contactForm.email.$invalid && !contactForm.email.$pristine" class="help-block">Informe um e-mail válido.</p>
                                            </div>
                                        </div>

                                        <div class="form-group">               
                                            <div class="col-sm-6" ng-class="{ 'has-error' : contactForm.telefone.$invalid && !contactForm.telefone.$pristine }">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input id="telefone" type="text" ng-model="telefone" name="telefone" class="form-control" placeholder="Informe seu Telefone/Celular" required>
                                                </div>
                                                <p ng-show="contactForm.telefone.$error.required && !contactForm.telefone.$pristine" class="help-block">O Campo Telefone é obrigatório</p>
                                            </div>
                                            <div class="col-sm-6" ng-class="{ 'has-error' : contactForm.endereco.$invalid && !contactForm.endereco.$pristine }">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                    <input type="text" ng-model="endereco" name="endereco" class="form-control" placeholder="Informe seu Endereço" required>
                                                </div>
                                                <p ng-show="contactForm.endereco.$error.required && !contactForm.endereco.$pristine" class="help-block">O Campo Endereço é obrigatório</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12" ng-class="{ 'has-error' : contactForm.assunto.$invalid && !contactForm.assunto.$pristine }">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-text-width"></i>                      
                                                    </div>
                                                    <input type="text" ng-model="assunto" name="assunto" class="form-control" placeholder="Informe o Assunto" maxlength="40" required>
                                                </div>
                                                <p ng-show="contactForm.assunto.$error.required && !contactForm.assunto.$pristine" class="help-block">O Campo Assunto é obrigatório</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12" ng-class="{ 'has-error' : contactForm.mensagem.$invalid && !contactForm.mensagem.$pristine }">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-comment fa-2"></i>                
                                                    </div>                  
                                                    <textarea class="form-control" ng-model="mensagem" name="mensagem" rows="5" placeholder="Digite a Mensagem..." required></textarea>
                                                </div>
                                                <p ng-show="contactForm.mensagem.$error.required && !contactForm.mensagem.$pristine" class="help-block">O Campo Mensagem é obrigatório</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button ng-click="SendMail()" id="contacts-submit" ng-disabled="contactForm.$invalid" class="btn btn-default btn-info">ENVIAR</button>
                                            </div>
                                        </div>
                                    
                                    </form> 
                                    
                                </div>
                            </div>
                            <!-- end panel-body -->
                            
                            <div id="RegularizacaoPrograma" class="tab-pane" role="tabpanel" ng-init="readRegPrograma()">
                                <div class="page-header">
                                   <h3>O que é o Programa?</h3>                        
                                </div>
                                <p ng-bind-html="descricaoPrograma"> </p>
                            </div>                      
                            <div id="RegularizacaoPriorizacao" class="tab-pane" role="tabpanel" ng-init="readRegPriorizacao()">
                                <div class="page-header">
                                   <h3>Priorização</h3>                        
                                </div>
                                <p ng-bind-html="descricaoPriorizacao"> </p>
                            </div>
                            <div id="RegularizacaoEtapas" class="tab-pane" role="tabpanel" ng-init="readRegEtapas()">
                               <div class="page-header">
                                   <h3>Etapas</h3>                        
                                </div>
                                <p ng-bind-html="descricaoEtapas"> </p>
                            </div>
                            <div id="RegularizacaoAreas" class="tab-pane" role="tabpanel" ng-init="readRegAreas()">
                                <div class="page-header">
                                   <h3>Áreas - {{numFase}}º Fase</h3>                        
                                </div>
                                <p ng-bind-html="descricaoArea"> </p>
                            </div>
                            <div id="RegularizacaoLegislacao" class="tab-pane" role="tabpanel" ng-init="readRegLegislacao()">
                               <div class="page-header">
                                   <h3>Legislação - <small>Regularização Fundiária</small> </h3>                        
                                </div>
                                <p ng-bind-html="descricaoLegislacao"> </p>
                            </div>
                            <div id="RegularizacaoPerguntasFrequentes" class="tab-pane" role="tabpanel" >
                                <div class="page-header">
                                   <h3>Perguntas Frequentes - <small>Regularização Fundiária</small></h3>                        
                                </div>
                                <div class="Perguntas">
                                    
                                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true" ng-init="getRegPerguntas()">
                                        
                                        <div class="panel panel-default" ng-repeat="regPer in RegPerguntas">
                                            
                                            <div class="panel-heading" role="tab" id="heading{{regPer.id}}">
                                              <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{regPer.id}}" aria-expanded="{{regPer.id === regPer.UltimoId ? 'true' : 'false'}}" aria-controls="collapse{{regPer.id}}">
                                                  {{regPer.pergunta}}
                                                </a>
                                              </h4>
                                            </div>                                           
                                            <div id="collapse{{regPer.id}}" class="panel-collapse collapse {{regPer.id === regPer.UltimoId ? 'in' : ' '}}" role="tabpanel" aria-labelledby="heading{{regPer.id}}">
                                              <div class="panel-body Padding15">
                                                {{regPer.resposta}}
                                              </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="RegularizacaoNoticias" class="tab-pane" role="tabpanel">
                                <div class="page-header">
                                   <h3>Notícias - <small>Regularização Fundiária</small></h3>                        
                                </div>
                                
                                <ul ng-init="getRegNoticias()">
                                    <li class="row row-noticia" ng-repeat="regNot in RegNoticias">
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <a ng-href="RegularizacaoNoticia.php?id={{regNot.id}}">
                                                <img ng-src="{{regNot.imagem_capa}}" class="img-responsive img-box img-thumbnail"> 
                                            </a>
                                        </div> 
                                        <div class="col-xs-12 col-sm-9 col-md-9">                                       
                                            <h4><a ng-href="RegularizacaoNoticia.php?id={{regNot.id}}">{{regNot.titulo}}</a></h4>
                                            <p>{{regNot.subtitulo}}</p>
                                        </div> 
                                    </li>
                                </ul>
                                
                            </div>
                            <!-- 3º -->                                 
                            <div id="MCMVPrograma" class="tab-pane" role="tabpanel" ng-init="readMcmvPrograma()">                             
                                <div class="page-header">
                                   <h3>O que é o programa?</h3>                        
                                </div>
                                <p ng-bind-html="descricaoMcmvPrograma"> </p>                               
                            </div>
                            <div id="MCMVCriterios" class="tab-pane" role="tabpanel" ng-init="readMcmvCriterios()">
                                <div class="page-header">
                                   <h3>Critérios de Atendimento</h3>                        
                                </div>
                                <p ng-bind-html="descricaoMcmvCriterios"> </p>                              
                            </div>                            
                            <div id="MCMVPerguntas" class="tab-pane" role="tabpanel">
                                
                                <div class="page-header">
                                   <h3>Perguntas Frequentes - <small>Minha casa minha vida</small></h3>                        
                                </div>
                                <div class="Perguntas">
                                    
                                    <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true" ng-init="getMcmvPerguntas()">
                                        
                                        <div class="panel panel-default" ng-repeat="mcmvPer in McmvPerguntas">
                                            
                                            <div class="panel-heading" role="tab" id="Pheading{{mcmvPer.id}}">
                                              <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#Pcollapse{{mcmvPer.id}}" aria-expanded="{{mcmvPer.id === mcmvPer.UltimoId ? 'true' : 'false'}}" aria-controls="Pcollapse{{mcmvPer.id}}">
                                                  {{mcmvPer.pergunta}}
                                                </a>
                                              </h4>
                                            </div>                                            
                                            <div id="Pcollapse{{mcmvPer.id}}" class="panel-collapse collapse {{mcmvPer.id === mcmvPer.UltimoId ? 'in' : ' '}}" role="tabpanel" aria-labelledby="Pheading{{mcmvPer.id}}">
                                              <div class="panel-body Padding15">
                                                  {{mcmvPer.resposta}}
                                              </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div id="MCMVHierarquizada" class="tab-pane" role="tabpanel">
                                
                                <div class="page-header">
                                   <h3> Lista Hierarquizada - <small>Minha casa minha vida</small></h3>                        
                                </div>
                                
                                <div class="search">              
                                    <input type="text" id="search-input" ng-model="searchTextHierarquizada" placeholder="Pesquisar..."/>
                                </div>
                                <div class="table-responsive">
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Arquivo</th>
                                                <th>Data Postagem</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListHierarquizada()">
                                            <tr ng-repeat="coH in listaHierarquizada| filter:searchTextHierarquizada">
                                                <td> <a ng-href="{{coH.url}}">{{coH.titulo}}</a> </td>
                                                <td> <a ng-href="{{coH.url}}">{{coH.data_postagem}}</a> </td>
                                                <td> <a ng-href="{{coH.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="MCMVSuplencia" class="tab-pane" role="tabpanel">
                               
                                <div class="page-header">
                                   <h3> Lista Complementar Suplência - <small>Minha casa minha vida</small></h3>                        
                                </div>
                                
                                <div class="search">              
                                    <input type="text" id="search-input" ng-model="searchTextComplementar" placeholder="Pesquisar..."/>
                                </div>
                                <div class="table-responsive">
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Arquivo</th>
                                                <th>Data Postagem</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListComplementar()">
                                            <tr ng-repeat="coC in listaComplementar| filter:searchTextComplementar">
                                                <td> <a ng-href="{{coC.url}}">{{coC.titulo}}</a> </td>
                                                <td> <a ng-href="{{coC.url}}">{{coC.data_postagem}}</a> </td>
                                                <td> <a ng-href="{{coC.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                                
                            <div id="MCMVCronograma" class="tab-pane" role="tabpanel">
                                
                                <div class="page-header">
                                   <h3>Cronograma - <small>Minha casa minha vida</small></h3>                        
                                </div>
                                
                                <div class="search">              
                                    <input type="text" id="search-input" ng-model="searchTextCronograma" placeholder="Pesquisar..."/>
                                </div>
                                <div class="table-responsive">
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Arquivo</th>
                                                <th>Data Postagem</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListMcmvCronograma()">
                                            <tr ng-repeat="coCrono in listaMCMVCronograma| filter:searchTextCronograma">
                                                <td> <a ng-href="{{coCrono.url}}">{{coCrono.titulo}}</a> </td>
                                                <td> <a ng-href="{{coCrono.url}}">{{coCrono.data_postagem}}</a> </td>
                                                <td> <a ng-href="{{coCrono.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="MCMVNoticias" class="tab-pane" role="tabpanel">
                               
                                <div class="page-header">
                                   <h3>Notícias - <small>Minha casa minha vida</small></h3>                        
                                </div>
                                
                                <ul ng-init="getMcmvNoticias()">
                                    <li class="row row-noticia" ng-repeat="McmvNot in McmvNoticias">
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <a ng-href="McmvNoticia.php?id={{McmvNot.id}}">
                                                <img ng-src="{{McmvNot.imagem_capa}}" class="img-responsive img-box img-thumbnail"> 
                                            </a>
                                        </div> 
                                        <div class="col-xs-12 col-sm-9 col-md-9">                                       
                                            <h4><a ng-href="McmvNoticia.php?id={{McmvNot.id}}">{{McmvNot.titulo}}</a></h4>
                                            <p>{{McmvNot.subtitulo}}</p>
                                        </div> 
                                    </li>
                                </ul>
                                
                            </div>
                            <div id="MCMVLegislacao" class="tab-pane" role="tabpanel" ng-init="getMcmvLegislacao()">                               
                                <div class="page-header">
                                   <h3>Legislação - <small>Minha casa minha vida</small></h3>                        
                                </div>
                                <p ng-bind-html="descricaoMcmvLegislacao"> </p>                             
                            </div>                               
                            <!-- 4º --> 
                            <div id="CMHConvocacoes" class="tab-pane" role="tabpanel">
                                <div class="page-header">
                                   <h3>Convocações</h3>                        
                                </div>
                                
                                <div class="search">              
                                    <input type="text" id="search-input" ng-model="searchTextConvocacoes" placeholder="Pesquisar..."/>
                                </div>
                                <div class="table-responsive">
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Arquivo</th>
                                                <th>Data Postagem</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListCMHConvocacoes()">
                                            <tr ng-repeat="co in listaCMHConvocacoes| filter:searchTextConvocacoes">
                                                <td> <a ng-href="{{co.url}}">{{co.titulo}}</a> </td>
                                                <td> <a ng-href="{{co.url}}">{{co.data_postagem}}</a> </td>
                                                <td> <a ng-href="{{co.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="CMHLegislacao" class="tab-pane" role="tabpanel" ng-init="getCMHLegislacao()">
                                <div class="page-header">
                                   <h3>Legislação - <small>Conselho municipal de habitação</small></h3>                        
                                </div>
                                <p ng-bind-html="descricaoCMHLegislacao"> </p>                              
                            </div>                            
                            <div id="CMHReunioes" class="tab-pane" role="tabpanel">
                                <div class="page-header">
                                   <h3>Ata de Reuniões</h3>                        
                                </div>
                                
                               <div class="search">              
                                    <input type="text" id="search-input" ng-model="searchTextReunioes" placeholder="Pesquisar..."/>
                                </div>
                                <div class="table-responsive">
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Arquivo</th>
                                                <th>Data Postagem</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListCMHReunioes()">
                                            <tr ng-repeat="coR in listaCMHReunioes| filter:searchTextReunioes">
                                                <td> <a ng-href="{{coR.url}}">{{coR.titulo}}</a> </td>
                                                <td> <a ng-href="{{coR.url}}">{{coR.data_postagem}}</a> </td>
                                                <td> <a ng-href="{{coR.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="CMHResolucoes" class="tab-pane" role="tabpanel">
                               
                                <div class="page-header">
                                   <h3>Ata de Resoluções</h3>                        
                                </div>
                                
                               <div class="search">              
                                    <input type="text" id="search-input" ng-model="searchTextResolucoes" placeholder="Pesquisar..."/>
                                </div>
                                <div class="table-responsive">
                                    <table id="test-table" class="sticky-thead">
                                        <thead>
                                            <tr>
                                                <th>Arquivo</th>
                                                <th>Data Postagem</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody ng-init="getListCMHResolucoes()">
                                            <tr ng-repeat="coRC in listaCMHResolucoes| filter:searchTextResolucoes">
                                                <td> <a ng-href="{{coRC.url}}">{{coRC.titulo}}</a> </td>
                                                <td> <a ng-href="{{coRC.url}}">{{coRC.data_postagem}}</a> </td>
                                                <td> <a ng-href="{{coRC.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
                                            </tr>
                                        </tbody>
                                    </table>  
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
                
       <?php include './App_Includes/Footer.php'; ?>         
    </body>
</html>