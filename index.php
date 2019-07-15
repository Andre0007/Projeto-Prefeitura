<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">

    <?php $pagina = 'Inicial'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Home'; include './App_Includes/Header.php';?>
    
    <body ng-controller="ControllerPrefeitura">
        
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?> 
        
        <main class="container">
            
            <div class="ConteudoCentralHome">
            
                <div id="Menu-Esquerda" class="col-sm-3 col-md-3 col-lg-3">

                    <div class="margin_sidebar">
                        <ul class="Lista-Servicos">                              
                            <li><a href="concursos"> Concursos <img src="App_Imagens/icons/icon-concurso.png" alt="Concursos"> </a></li> 
                            <li><a href="menu-de-servicos"> Serviços <img src="App_Imagens/icons/icon-servicos.png" alt="Serviços"> </a></li> 
                            <li><a href="documentos-licitacao"> Licitações <img src="App_Imagens/icons/icon-licitacoes.png" alt="Licitações"> </a></li> 
                            <li><a href="ouvidoria"> Ouvidoria <img src="App_Imagens/icons/icon-ouvidoria.png" alt="Ouvidoria"> </a></li> 
                            <li><a href="horario-atendimento"> Horário de Atendimento <img src="App_Imagens/icons/icon-hro-atend.png" alt="Horário Atendimento"> </a></li> 
                        </ul>
                    </div>

                    <div class="margin_sidebar">
                        <ul class="Lista-Servicos">                              
                            <li><a href="https://portal.conam.com.br/mairipora/2via_iptu.php"> 2ª Via de IPTU <img src="App_Imagens/icons/icon-iptu.png" alt="IPTU"> </a></li> 
                            <li><a href="https://portal.conam.com.br/mairipora/2via_iss_taxas.php"> 2ª Via de ISS/Taxas <img src="App_Imagens/icons/icon-iss-taxas.png" alt="ISS/Taxas"> </a></li> 
                            <li><a href="https://portal.conam.com.br/mairipora/certidao_venal.php"> Certidão Valor Venal <img src="App_Imagens/icons/icon-v-venal.png" alt="Valor Venal"> </a></li> 
                            <li><a href="https://portal.conam.com.br/mairipora/certidao_imobiliario.php"> Certidão Débitos Imobiliários <img src="App_Imagens/icons/icon-cert-imob.png" alt="Débitos Imobiliários"> </a></li> 
                            <li><a href="https://portal.conam.com.br/mairipora/veracidade.php"> Autenticidade de Certidões <img src="App_Imagens/icons/icon-aut-cert.png" alt="Autenticidade de Certidões"> </a></li> 
                        </ul>
                    </div>

                    <div class="margin_sidebar">
                        <ul class="Lista-Servicos">                              
                            <li><a data-toggle="modal" data-target="#myModalServicosSubprefeitura"> <label class="MenorNoMenu">Serviços Disponíveis na SubPrefeitura de Terra Preta</label> <img src="App_Imagens/icons/icon-serv-terra-p.png" alt="SubPrefeitura de Terra Preta"> </a></li> 
                            <li><a href="calendario-de-eventos-mairipora"> <label class="MenorNoMenu">Calendário de Eventos da Cidade</label> <img src="App_Imagens/icons/icon-calend-ev.png" alt="Calendário de Eventos da Cidade"> </a></li> 
                            <li><a data-toggle="modal" data-target="#myModalConselhoTutelar"> <label class="MenorNoMenu">Conselho Tutelar Plantões de Funcionamento</label> <img src="App_Imagens/icons/icon-cons-tute.png" alt="Conselho Tutelar Plantões"> </a></li> 
                            <li><a data-toggle="modal" data-target="#myModalIPTU"> <label class="MenorNoMenu">Correspondentes Bancários Pagamentos do IPTU</label> <img src="App_Imagens/icons/icon-cert-imob.png" alt="Bancários Pagamentos do IPTU"> </a></li> 
                            <li><a href="lista-concursos-estagiario-mairipora"> Concurso Estagiário <img src="App_Imagens/icons/icon-conc-estag.png" alt="Concurso Estagiário"> </a></li> 
                            <li><a class="Cursor" data-toggle="modal" data-target="#myModalComunicados"> Comunicado Importante <img src="App_Imagens/icons/icon-comunicado.png" alt="Comunicado Importante"> </a></li> 
                            <li><a class="Cursor" data-toggle="modal" data-target="#myModalListaVagasCreche"> Vagas Creche <img src="App_Imagens/icons/icon-creche.png" alt="Vagas Creche"> </a></li> 
                        </ul>
                    </div>

                </div>

                <div id="Conteudo-Direita" class="col-sm-9 col-md-9 col-lg-9">

                    <div class="container-fluid">

                        <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="6500">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" ng-init="getNewThree()">    

                                <div class="item" ng-class="{active:!$index}" ng-repeat="OldThree in noticiasThree">

                                    <a ng-href="Noticia.php?id={{OldThree.id}}">
 
                                        <div class="container-fluid">
                                            <div class="row">
                                                <img ng-src="{{OldThree.imagem_capa}}" class="img-responsive" width="793" alt="{{OldThree.titulo}}">
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

                                <div class="newsfeed_area">

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
                            <div class="">
                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 CustomVideo"> 

                                    <div class="html5gallery" data-responsive="true" data-skin="gallery" style="display:none;" data-youtubeapikey="AIzaSyCy7k-J1o4sRDNM5yDxkAmcpSsslhsoUK8" data-youtubeplaylistid="PLge6_GR7yGoDC3U6MthfQyXvyFO_Suz0C" data-showtitle="false">                                            
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> 

                </div>
                
            </div>
            
        </main>
        
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

        <img src="App_Imagens/atencao/Iptu_2017_Internet.jpg" class="img-thumbnail"><br><br>                

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

<!-- Modal Comunicados -->
<div class="modal fade" id="myModalComunicados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> </h4>
      </div>
      <div class="modal-body text-center" ng-init="getListFourComunicadosImportante()">

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Comunicados</b></div>
            
            <table class="table table-striped">
                <tbody>
                    <tr ng-repeat="comu in listaComunicados">
                        <td ng-bind-html="trustAsHtml(comu.descricao)"></td>
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
<!-- Fim Modal Comunicados -->

<!-- Modal Vagas Creche -->
<div class="modal fade" id="myModalListaVagasCreche" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> </h4>
      </div>
      <div class="modal-body text-center" ng-init="getListaCreche()">

        <div class="panel panel-primary">                      

            <div class="panel-heading"><b>Vagas Creche</b></div>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="creche in ListaCreche">
                        <td><a ng-href="{{creche.url}}">{{creche.nome_titulo}}</a></td>
                        <td><a ng-href="{{creche.url}}">{{creche.data_lancamento}}</a></td>
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
<!-- Fim Modal Vagas Creche -->

<!-- Modal Painel Comunicados
<div class="modal fade" id="myModalComunicadoImportante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <b>Painel de Comunicados</b> </h4>
      </div>
      <div class="modal-body text-center">
          <img src="" class="img-thumbnail imgMenorAuto">  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!--Fim Modal Painel Comunicados -->