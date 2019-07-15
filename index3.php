 <!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">

    <?php $pagina = 'Inicial'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Home'; include './App_Includes/Header.php';?>
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>             

        <section id="courseArchive" class="ConteudoSectionHome">

            <div class="container CustomContainer">

                
                
                <div class="row"><!-- col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-4 -->
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 NewCenter">

                        <div id="SubMenu">                        
                            
                            <ul class="nav navbar-nav">                                   
                                <li class="dropdown"><a class="Linha" href="concursos">Concursos</a></li>
                                <li class="dropdown"><a class="Linha" href="menu-de-servicos">Serviços</a></li>
                                <li class="dropdown"><a class="Linha" href="documentos-licitacao">Licitações</a></li>
                                <li class="dropdown"><a class="Linha" href="ouvidoria">Ouvidoria</a></li>

                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle IPTU" data-toggle="dropdown">2º Via de <b style="color: yellow;" >IPTU</b> e Certidões</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="https://portal.conam.com.br/mairipora/2via_iptu.php">2º Via de IPTU</a></li>
                                    <li class="divider"></li>
                                    <li><a href="https://portal.conam.com.br/mairipora/2via_iss_taxas.php">2º Via de ISS/TAXAS</a></li>
                                    <li class="divider"></li>
                                    <li><a href="https://portal.conam.com.br/mairipora/certidao_venal.php">Certidão Valor Venal</a></li>
                                    <li class="divider"></li>
                                    <li><a href="https://portal.conam.com.br/mairipora/certidao_imobiliario.php">Certidão Débitos Imobiliários</a></li>
                                    <li class="divider"></li>
                                    <li><a href="https://portal.conam.com.br/mairipora/veracidade.php">Autenticidade das Certidões</a></li>
                                  </ul>
                                </li>
                                
                                <li class="dropdown">
                                  <a class="MinhaCasaMinhaVida" href="horario-atendimento">Horário de Atendimento</a> 
                                  <!--<a class="MinhaCasaMinhaVida" href="secretaria-de-habitacao">Secretaria de Habitação</a>-->
                                </li>
                                
                            </ul>

                        </div>

                    </div>

                </div>

            </div>           

            <div class="container">

                <div class="row">
                    
                    <!-- sidebar -->
                    <div class="col-lg-4 col-md-4 col-sm-4">

                        <div class="courseArchive_sidebar">

                            <div class="single_sidebar">

                                <h2><span class="fa fa-share-square-o"></span> Nossas Redes</h2>

                                <div class="col-md-12 col-sm-12 col-xs-12 SocialMargin">
                                    <ul class="footer_social">
                                        <li><a title="Twitter" class="twitter soc_tooltip" href="https://twitter.com/PrefMairipora"><i class="fa fa-twitter"></i></a></li>
                                        <li><a title="Google+" class="google soc_tooltip" href="https://plus.google.com/113638927898804842760"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a title="Facebook" class="facebook soc_tooltip" href="https://www.facebook.com/prefeiturademairipora/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a title="Youtube" class="youtube soc_tooltip" href="https://www.youtube.com/channel/UC1OSbrK1eHiB5WKOmPpmkWw/videos"><i class="fa fa-youtube"></i></a></li>
                                    </ul>				
				</div>

                            </div>
                            
                            <div class="single_sidebar">

                                <h2><span class="fa fa-bars"></span> Informações</h2>

                                <ul class="news_tab">
                                    <!--<li><input type="image" src="App_Imagens/Botoes/IPTU.jpg" class="img-responsive" alt="IPTU - ISS Refis" data-toggle="modal" data-target="#myModalTabelaIPTU"></li>-->                                  
                                    <li><input type="image" src="App_Imagens/Botoes/Botao_Servivos_Subprefeitura.jpg" class="img-thumbnail" alt="Serviços disponíveis na Subprefeitura de Terra Preta" data-toggle="modal" data-target="#myModalServicosSubprefeitura"></li> 
                                    <li><a href="calendario-de-eventos-mairipora"><input type="image" src="App_Imagens/Botoes/botao_calendario_mairipora.jpg" class="img-responsive" alt="Calendário de Eventos da Cidade"></a></li>
                                    <li><input type="image" src="App_Imagens/Botoes/Botao_Conselho_Tutelar.jpg" class="img-responsive" alt="botão conselho tutelar" data-toggle="modal" data-target="#myModalConselhoTutelar"></li>
                                    <li><input type="image" src="App_Imagens/Botoes/Botao_IPTU.jpg" class="img-responsive" alt="botão informações IPTU" data-toggle="modal" data-target="#myModalIPTU"></li>
                                </ul>

                            </div>

                            <div class="single_sidebar">

                                <h2><span class="fa fa-graduation-cap"></span> Concursos Editais</h2>
                                <ul class="news_tab" ng-init="getListFourConcursoEdital()">
                                    <li ng-repeat="concursoEdital in listaConcursoEdital"> 
                                        <a ng-href="{{concursoEdital.url}}">{{concursoEdital.nome_titulo}}</a> 
                                    </li>                         
                                </ul>

                                <a href="lista-concursos-editais-mairipora"> <i class="fa fa-sign-in"></i> Veja lista completa</a>
                            </div>

                            
                            <div class="single_sidebar">
                                <h2><span class="fa fa-graduation-cap"></span> Concursos Estagiários</h2>
                                <ul class="news_tab" ng-init="getListFourConcursoEstagio()">
                                    <li ng-repeat="concursoEstagio in listaConcursoEstagio"> 
                                        <a ng-href="{{concursoEstagio.url}}">{{concursoEstagio.nome_titulo}}</a> 
                                    </li>                                             
                                </ul>

                                <a href="lista-concursos-estagiario-mairipora"> <i class="fa fa-sign-in"></i> Veja lista completa</a>
                            </div>                           

                            <div class="single_sidebar">
                                <h2><span class="fa fa-bullhorn"></span> Comunicado Importante</h2>
                                <ul class="news_tab" ng-init="getListFourComunicadosImportante()">                                    
                                    <li ng-repeat="comu in listaComunicados"> 
                                        <p ng-bind-html="trustAsHtml(comu.descricao)"></p>
                                    </li> 
                                </ul>
                            </div>

                            <div class="single_sidebar">
                                <h2><span class="fa fa-book"></span> Vagas Creche</h2>
                                <ul class="news_tab" ng-init="getListaCreche()">                                    
                                    <li ng-repeat="creche in ListaCreche">
                                        <div class="media">
                                            <div class="media-body">
                                                <a ng-href="{{creche.url}}">{{creche.nome_titulo}}</a>
                                                <span class="feed_date">{{creche.data_lancamento}}</span>
                                            </div>
                                        </div>
                                    </li>                                
                                </ul>
                            </div>

                        </div>

                    </div>
                    <!-- start course archive sidebar -->
                    
                    <div class="col-lg-8 col-md-8 col-sm-8 DesignHome">                       

                        <div class="panel panel-primary">
                            <div class="panel-heading"> Conselho Municipal de Habitação</div>
                            <div class="panel-body">
                                <div class="col-md-10 PaddingNull">
                                A Prefeitura de Mairiporã promoverá a eleição para o Conselho Municipal de Habitação no mês de setembro. As inscrições devem ser feitas até 16 horas do dia 20 de julho, sem prorrogação. Para mais informações, veja os documentos abaixo:<br>
                                - <a style="color: #337ab7;" href="App_Uploads/Habitacao/ConselhoMunicipal/Dec_8.378_processo_eleitoral_Conselho_Habitacao.pdf">Dec_8.378 processo eleitoral Conselho Habitação</a><br>
                                - <a style="color: #337ab7;" href="App_Uploads/Habitacao/ConselhoMunicipal/Dec_8.378_anexo_I.pdf">Dec_8.378 anexo I</a><br>
                                - <a style="color: #337ab7;" href="App_Uploads/Habitacao/ConselhoMunicipal/Dec_8.378_anexo_II.pdf">Dec_8.378 anexo II</a><br>
                                Em caso de dúvidas ou outras informações, <a style="color: #337ab7; cursor: pointer;" data-toggle="modal" data-target="#myModalFormHabitacao">clique aqui</a> e mande sua mensagem.
                                </div>                                
                                <div class="col-md-2 PaddingNull" style="margin-top: 10px;">
                                    <img class="img-responsive" src="App_Uploads/Habitacao/ConselhoMunicipal/Conselho_Habitacao.gif" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid">

                            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="6500">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" ng-init="getNewThree()">    

                                    <div class="item" ng-class="{active:!$index}" ng-repeat="OldThree in noticiasThree">

                                        <a ng-href="Noticia.php?id={{OldThree.id}}">

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12"><img ng-src="{{OldThree.imagem_capa}}" class="img-thumbnail"></div>
                                                    <div class="col-md-12">
                                                        <h3>{{OldThree.titulo}}</h3>
                                                        <p>{{OldThree.subtitulo}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </a>

                                    </div> 

                                </div>
                                <!-- End Carousel Inner -->                                    

                                <!-- Controls -->
                                <a class="left carousel-control" href="#custom_carousel" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">anterior</span>
                                </a>

                                <a class="right carousel-control" href="#custom_carousel" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">proximo</span>
                                </a>

                            </div>

                        </div>

                        <div class="row" style="padding-top: 5px"> 

                            <div class="container-fluid">

                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <div class="newsfeed_area wow fadeInRight">

                                        <ul class="nav nav-tabs feed_tabs" id="myTab2">
                                            <li class="active"><a href="#news" data-toggle="tab">Ultimas Notícias</a></li>
                                            <li><a href="#events" data-toggle="tab">Eventos Cidade</a></li>         
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <!-- Start news tab content -->
                                            <div class="tab-pane fade in active" id="news">                

                                                <ul class="news_tab" ng-init="getOldFour()">                                                
                                                    <li ng-repeat="OldFour in noticiasFour">                                                        
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a class="news_img" ng-href="Noticia.php?id={{OldFour.id}}">
                                                                   <img class="media-object" ng-src="{{OldFour.imagem_capa}}" alt="{{OldFour.imagem_capa}}">
                                                                </a>
                                                            </div>

                                                            <div class="media-body">
                                                                <a ng-href="Noticia.php?id={{OldFour.id}}">{{OldFour.titulo}}</a>
                                                                <span class="feed_date">{{OldFour.data_postagem}}</span>
                                                            </div>
                                                        </div>
                                                    </li>                                                                                                     
                                                </ul>                
                                                <a class="see_all" href="lista-noticias">Veja Todas Notícias</a>
                                            </div>

                                            <!-- Start events tab content -->
                                            <div class="tab-pane fade " id="events">

                                                <ul class="news_tab" ng-init="getListFourEventos()">                                                   
                                                    <li ng-repeat="EventosFour in listaEventos">
                                                        <div class="media">                                                            
                                                            <div class="media-left">                 
                                                                <div class="text-center date-body" style="width:150px">
                                                                    <label class="date-title">{{EventosFour.data_inicio | date :  "MMMM/yyyy"}}</label>
                                                                    <div class="date-content">
                                                                      <p class="dia">{{EventosFour.data_inicio | date :  "dd"}}</p>
                                                                      <hr class="nomargin"/>
                                                                      <p class="nomargin"><b>{{EventosFour.data_inicio | date :  "EEEE"}}</b></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <b>{{EventosFour.title}}</b>
                                                            </div>                                                           
                                                        </div>
                                                    </li>                                                    
                                                </ul>

                                                <a class="see_all" href="calendario-de-eventos-mairipora">Calendário Eventos na Cidade</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row CanalPMM">                           
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"> 

                                        <div class="html5gallery" data-responsive="true" data-skin="gallery" style="display:none;" data-youtubeapikey="AIzaSyCy7k-J1o4sRDNM5yDxkAmcpSsslhsoUK8" data-youtubeplaylistid="PLge6_GR7yGoDC3U6MthfQyXvyFO_Suz0C" data-showtitle="false">                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>
                    <!-- End course content -->



                    

                </div>

            </div>
      
        </section>

       <?php include './App_Includes/Footer.php'; ?>       
        
    </body>
</html>



<!-- Modal Conselho Tutelar -->
<div class="modal fade" id="myModalConselhoTutelar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Plantões de Funcionamento</h4>
      </div>

      <div class="modal-body">

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Telefone dos Conselheiros</b></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Conselheiro</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sede do Conselho Tutelar</td>
                        <td>(11) 4604-2345 / 4419-7250</td>
                    </tr>
                    <tr>
                        <td>David Ramos</td>
                        <td>(11) 97347-6976</td>
                    </tr>
                    <tr>
                        <td>Gabriela Salamony</td>
                        <td>(11) 96394-5759</td>
                    </tr>
                    <tr>
                        <td>Myriam Batista</td>
                        <td>(11) 971280-6762</td>
                    </tr>
                    <tr>
                        <td>Patrícia Faria</td>
                        <td>(11) 99893-5383</td>
                    </tr>
                    <tr>
                        <td>Sandra M. Freitas</td>
                        <td>(11) 97533-3648</td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Plantões Diários na Sede – das 8 às 17 horas</b></div>
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Conselheiro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Segunda-feira</td>
                        <td>Sandra M. Freitas</td>
                    </tr>
                    <tr>
                        <td>Terça-feira</td>
                        <td>Patrícia Faria</td>
                    </tr>
                    <tr>
                        <td>Quarta-feira</td>
                        <td>Gabriela Salamony</td>
                    </tr>
                    <tr>
                        <td>Quinta-feira</td>
                        <td>David Ramos</td>
                    </tr>
                    <tr>
                        <td>Sexta-feira</td>
                        <td>Myriam Batista</td>
                    </tr>
                </tbody>

            </table>

        </div>

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Plantões Noturnos – das 17 às 8 horas</b></div>
            <table class="table table-striped">                            
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Conselheiro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Segunda-feira</td>
                        <td>David Ramos</td>
                    </tr>
                    <tr>
                        <td>Terça-feira</td>
                        <td>Myriam Batista</td>
                    </tr>
                    <tr>
                        <td>Quarta-feira</td>
                        <td>Sandra M. Freitas</td>
                    </tr>
                    <tr>
                        <td>Quinta-feira</td>
                        <td>Patrícia Faria</td>
                    </tr>
                    <tr>
                        <td>Sexta-feira</td>
                        <td>Gabriela Salamony</td>
                    </tr>
                </tbody>
            </table>

        </div>
          
        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Escala de Sobreaviso dos Finais de Semana do ano 2017</b></div>

            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>06 e 07 de Maio</td>
                        <td>Sandra</td>
                    </tr>
                    <tr>
                        <td>13 e 14 de Maio</td>
                        <td>Myriam</td>
                    </tr>
                    <tr>
                        <td>20 e 21 de Maio</td>
                        <td>Gabriel</td>
                    </tr> 
                    <tr>
                        <td>27 e 28 de Maio</td>
                        <td>Patricia</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>03 e 04 de Junho</td>
                        <td>David</td>
                    </tr>
                    <tr>
                        <td>10 e 11 de Junho</td>
                        <td>Sandra</td>
                    </tr>
                    <tr>
                        <td>17 e 18 de Junho</td>
                        <td>Myriam</td>
                    </tr>
                    <tr>
                        <td>24 e 25 de Junho</td>
                        <td>Gabriela</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>01 e 02 de Julho</td>
                        <td>Patricia</td>
                    </tr>
                    <tr>
                        <td>08 e 09 de Julho</td>
                        <td>David</td>
                    </tr>
                    <tr>
                        <td>15 e 16 de Julho</td>
                        <td>Sandra</td>
                    </tr>
                    <tr>
                        <td>22 e 23 de Julho</td>
                        <td>Myriam</td>
                    </tr>
                    <tr>
                        <td>29 e 30 de Julho</td>
                        <td>Gabriela</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>05 e 06 de Agosto</td>
                        <td>Patricia</td>
                    </tr>
                    <tr>
                        <td>12 e 13 de Agosto</td>
                        <td>David</td>
                    </tr>
                    <tr>
                        <td>19 e 20 de Agosto</td>
                        <td>Sandra</td>
                    </tr>
                    <tr>
                        <td>26 e 27 de Agosto</td>
                        <td>Myriam</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>02 e 03 de Setembro</td>
                        <td>Gabriela</td>
                    </tr>
                    <tr>
                        <td>09 e 10 de Setembro</td>
                        <td>Patricia</td>
                    </tr>
                    <tr>
                        <td>16 e 17 de Setembro</td>
                        <td>David</td>
                    </tr>
                    <tr>
                        <td>23 e 24 de Setembro</td>
                        <td>Sandra</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>30/Set. e 01/Out</td>
                        <td>Myriam</td>
                    </tr>
                    <tr>
                        <td>07 e 08 de Outubro</td>
                        <td>Gabriela</td>
                    </tr>
                    <tr>
                        <td>14 e 15 de Outubro</td>
                        <td>Patricia</td>
                    </tr>
                    <tr>
                        <td>21 e 22 de Outubro</td>
                        <td>David</td>
                    </tr>
                    <tr>
                        <td>28 e 29 de Outubro</td>
                        <td>Sandra</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>04 e 05 de Novembro</td>
                        <td>Myriam</td>
                    </tr>
                    <tr>
                        <td>11 e 12 de Novembro</td>
                        <td>Gabriela</td>
                    </tr>
                    <tr>
                        <td>18 e 19 de Novembro</td>
                        <td>Patricia</td>
                    </tr>
                    <tr>
                        <td>25 e 26 de Novembro</td>
                        <td>David</td>
                    </tr>
                    <tr class="info">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>02 e 03 de Dezembro</td>
                        <td>Sandra</td>
                    </tr>
                    <tr>
                        <td>09 e 10 de Dezembro</td>
                        <td>Myriam</td>
                    </tr>
                    <tr>
                        <td>16 e 17 de Dezembro</td>
                        <td>Gabriela</td>
                    </tr>
                    <tr>
                        <td>23 e 24 de Dezembro</td>
                        <td>Patricia</td>
                    </tr>
                    <tr>
                        <td>30 e 31 de Dezembro</td>
                        <td>David</td>
                    </tr>
                </tbody>

            </table>

        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>

    </div>

  </div>

</div>
<!-- Fim Conselho Tutelar -->

<!-- Modal IPTU -->
<div class="modal fade" id="myModalIPTU" tabindex="-1" role="dialog" aria-labelledby="myModalIPTU">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>

      <div class="modal-body">

        <img src="" class="img-thumbnail"><br><br>                

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Correspondentes Bancários para pagamento de IPTU</b></div>
            <div class="panel-body">


        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>CAIXA ECONÔMICA FEDERAL</b></div>

            <div class="panel-body">
              <p>Funcionando de segunda a sexta-feira das 8hs às 19 hs e aos sábados das 8hs às 14 hs</p>
              <p>Casas Lotéricas <b>(valor máximo: R$ 2.000,00):</b> em dinheiro ou débito em conta de correntistas Caixa — conforme norma interna de cada estabelecimento.</p>
            </div>

            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lotérica Loteria do Bilhão LTDA ME</td>
                        <td>Rua José Roberto Melchior, 99 Vila Sabesp - Mairiporã</td>
                        <td>4604-6924</td>
                    </tr>
                    <tr>
                        <td>Lotérica lpiranga Mega Sorte</td>
                        <td>Rua Nicolau Antonio Brilha, 80 Loja 6 - Mairiporã</td>
                        <td>4419-3133</td>
                    </tr>
                    <tr>
                        <td>Lotérica Praça do Rosário</td>
                        <td>Praça Rosário, 25 Vila Nova Juqueri - Mairiporã</td>
                        <td>4419-6588</td>
                    </tr>
                    <tr>
                        <td>Lobeca Loterias LTDA ME</td>
                        <td>Rua Coronel Fagundes, 61 Centro Mairiporã</td>
                        <td>4419-1619</td>
                    </tr>
                    <tr>
                        <td>Centro Lotérico Terra Preta LTDA</td>
                        <td>Av Pietro Petri, 598 Centro - Mairiporã</td>
                        <td>4486-4555</td>
                    </tr>
                </tbody>

            </table>

        </div>

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Bradesco</b></div>
            <div class="panel-body">
              <p>Horário de atendimento: conforme regras do estabelecimento.</p>
              <p>Valor máximo que os correspondentes bancários estão autorizados a receber: Até <b>R$ 1.000,00</b> em dinheiro por título.</p>
            </div>

            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MÓVEIS BONART LTDA</td>
                        <td>Av. Tabelião Passarela, 619 - Centro</td>
                    </tr>
                    <tr>
                        <td>MERCADINHO DO ED</td>
                        <td>Rua Ivanira de F. Feitoza, 172 Jd. Capoavinha</td>
                    </tr>
                    <tr>
                        <td>AÇOUGUE ALDEIA DA SERRA</td>
                        <td>Av. Tabelião Passarela,185 - Centro</td>
                    </tr>
                    <tr>
                        <td>BR MANIA CONVENIÊNCIAS</td>
                        <td>Av. Tabelião Passarela, 77 - Centro</td>
                    </tr>
                    <tr>
                        <td>CASAS BAHIA - LOJA 1389</td>
                        <td>Av. Tabelião Passarela, 610 - Centro</td>
                    </tr>
                    <tr>
                        <td>PRETA MATERIAIS PARA CONSTRUÇÃO</td>
                        <td>Rua Ana José Miziara, 50 - Terra Preta</td>
                    </tr>                                
                    <tr>
                        <td>DROGARIA AVENIDA PETRI</td>
                        <td>Av. Pietro Petri, 767 - Terra Preta</td>
                    </tr>
                    <tr>
                        <td>MERCADINHO GIACOMO</td>
                        <td>Rua Antonio Rondina, 110 - Terra Preta</td>
                    </tr>
                    <tr>
                        <td>ARMAZÉM GALDINO</td>
                        <td>Estrada Arão Sahm, 175 - Terra Preta</td>
                    </tr>
                    <tr>
                        <td>DROGARIA D0 POVO</td>
                        <td>Av. Pietro Petri, 518 - Terra Preta</td>
                    </tr>
                    <tr>
                        <td>COMERCIAL BONET</td>
                        <td>Av. Pietro Petri, 550 - Terra Preta</td>
                    </tr>
                    <tr>
                        <td>ARMAZÉM GALDINO (FILIAL)</td>
                        <td>Av. Pietro Petri, 900 - Terra Preta</td>
                    </tr>
                </tbody>

            </table>

        </div>                 

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>SANTANDER</b></div>
            <div class="panel-body">
              <p>Horário de atendimento: conforme regras do estabelecimento.</p>
              <p>Valor máximo que os correspondentes bancários estão autorizados a receber: Até <b>R$ 1.000,00</b> em dinheiro por título.</p>
            </div>

            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SUPERMERCADO MIHARA</td>
                        <td>R. Motomo Maeda, 35 - Centro</td>
                    </tr>
                    <tr>
                        <td>MITSUKO MIHARA SUPERMERCADOS</td>
                        <td>R. Sete de Setembro, 99 - Terra Preta</td>
                    </tr>
                    <tr>
                        <td>MIHARA MINIMERCADO LTDA EPP</td>
                        <td>R. Firmo Campos, 626- Jd. Fernão Dias</td>
                    </tr>                               
                </tbody>

            </table>

        </div>

      </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>

     </div>

   </div>

 </div>

</div>
<!-- Fim Modal IPTU -->

<!-- Modal Refis -->
<div class="modal fade" id="myModalTabelaIPTU" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>

      <div class="modal-body">

        <img src="App_Imagens/Botoes/IPTU.jpg" class="img-thumbnail"><br><br>

        <div class="panel panel-primary">                      
            <div class="panel-heading"><b></b></div>
            <div class="panel-body">
                <p> <a style="color: #337ab7;" href="App_Uploads/Legislacao/Lei_3.660_REFIS.pdf">Lei 3.660 REFIS</a> </p>                        
            </div>                        

            <table class="table table-striped">       
                <tbody>
                    <tr>
                        <td><i style="color: #337ab7; font-weight: bold;">100%</i> para pagamento à vista</td>
                    </tr>
                    <tr>
                        <td><i style="color: #337ab7; font-weight: bold;">90%</i> para pagamento em até 12 parcelas</td>
                    </tr>
                    <tr>
                        <td><i style="color: #337ab7; font-weight: bold;">70%</i> para pagamento em até 24 parcelas</td>
                    </tr>
                    <tr>
                        <td><i style="color: #337ab7; font-weight: bold;">50%</i> para pagamento em até 36 parcelas</td>
                    </tr>
                    <tr>
                        <td><i style="color: #337ab7; font-weight: bold;">30%</i> para pagamento em até 48 parcelas</td>
                    </tr>
                </tbody>
            </table>

        </div> 

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>

    </div>

  </div>

</div>
<!-- Fim Modal Refis -->

<!-- Modal Servicos SubPrefeitura -->
<div class="modal fade" id="myModalServicosSubprefeitura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> </h4>
      </div>
      <div class="modal-body text-center">

        <img src="App_Imagens/Servicos/Servicos_disponiveis_na_Subprefeitura_de_Terra_Preta.jpg" alt="Serviços disponíveis na Subprefeitura de Terra Preta" class="img-thumbnail">                     

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
<!-- Fim Modal Servicos SubPrefeitura -->

<!-- Modal Painel Comunicados
<div class="modal fade" id="myModalComunicadoImportante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <b>Painel de Comunicados</b> </h4>
      </div>
      <div class="modal-body text-center">
          <img src="App_Imagens/atencao/Conselho_Desenvolvimento_Social.jpg" class="img-thumbnail imgMenorAuto">  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!--Fim Modal Painel Comunicados -->

<div class="modal fade" id="myModalFormHabitacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Formulário de Contato - <b>Tire suas dúvidas.</b> </h4>
      </div>
      <div class="modal-body text-center">
          
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>