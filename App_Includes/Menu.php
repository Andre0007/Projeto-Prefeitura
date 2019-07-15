<a class="scrollToTop" href="#"></a>

<?php 

if($_SERVER['SERVER_NAME'] == 'localhost'){
      
echo '<header class="BackHeader">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                <a href="index.php"> <img src="App_Imagens/Logo_Prefeitura-menor.png" class="img-responsive" alt="Prefeitura de Mairiporã"> </a>               
            </div>
            <nav class="navbar navbar-default col-xs-12 col-sm-7 col-md-7 col-lg-9">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                    <ul class="nav nav-pills navbar-right MenuPills">

                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Governo <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="Sobre-Prefeito.php">Prefeito</a></li>
                            <li><a href="Sobre-Vice-Prefeito.php">Vice-Prefeito</a></li>
                            <li><a href="Secretarias.php">Secretários</a></li>
                            <li class="divider"></li>
                            <li><a href="Secretaria-MeioAmbiente.php">Secretaria do Meio Ambiente</a></li>
                        </ul>
                      </li>
                      <li role="presentation"><a href="Imprensa-Oficial.php">Imprensa Oficial</a></li>
                      <li role="presentation"><a href="Audiencia-Publica.php">Audiência Pública</a></li>

                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Portal Transparência <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.topdata-info.com.br/contaspublicas/prefeitura/anos.php?municipios=mairipora">Contas Públicas</a></li>
                            <li><a href="http://leideacesso.etransparencia.com.br/mairipora.prefeitura.sp/Portal/desktop.html?340">Portal Transparência</a></li>
                        </ul>
                      </li>

                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Leis e Decretos <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.topdata-info.com.br/contaspublicas/prefeitura/anos.php?municipios=mairipora">Leis Municipais</a></li>
                            <li><a href="http://leideacesso.etransparencia.com.br/mairipora.prefeitura.sp/Portal/desktop.html?340">Câmara de Mairiporã</a></li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tribunal de Contas<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="App_Uploads/Menu/Parecer-TC-2013.pdf">Parecer TCE 2013</a></li>              
                        </ul>
                      </li>

                      <li role="presentation"><a href="Fale-Conosco.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </nav>    
            <select class="pull-right QuebrarLinha form-control SelectMenu" onchange="window.open(\'../PrefeituraMairipora/\' + this.value,\'_self\');">
                <option value="index.php" selected="selected">
                    Selecione uma Página
                </option>
                <option value="ConcursoPublico.php">
                    Concursos
                </option>
                <option value="Lista-Concursos-Estagiarios.php">
                    Concurso Estágiario
                </option>
                <option value="Lista-Concursos-Editais.php">
                    Concursos Editais
                </option>
                <option value="Calendario-Eventos.php">
                    Calendário de Eventos
                </option>
                <option value="Servicos.php">
                    Serviços
                </option>
                <option value="Licitacao.php">
                    Licitações
                </option>
                <option value="Painel-Licitacoes.php">
                    Painel de Licitações
                </option>
                <option value="CadastroFornecedores.php">
                    Cadastro de Fornecedores
                </option>
                <option value="Ouvidoria.php">
                    Ouvidoria
                </option>
                <option value="Horario-Atendimento.php">
                    Horário de Atendimento
                </option>
                <option value="Lista-Noticias.php">
                    Todas Notícias
                </option>
                <option value="Legislacoes.php">
                    Legislações
                </option>
                <option value="Repasse-Federal.php">
                    Repasse Federal
                </option>
                <option value="Lista-Email.php">
                    Lista de E-mails
                </option>
                <option value="Lista-Telefone.php">
                    Lista de Telefones
                </option>
            </select>
            <div class="row col-xs-12 pull-right QuebrarLinha">           
                <ul class="Header_social pull-right">
                    <li> <a href="https://www.facebook.com/prefeiturademairipora/"> <img src="App_Imagens/Layout/logo-facebook.png" alt="Facebook" class="img-responsive" /> </a> </li>
                    <li> <a href="https://www.youtube.com/channel/UC1OSbrK1eHiB5WKOmPpmkWw/videos"> <img src="App_Imagens/Layout/logo-youtube.png" alt="Youtube" class="img-responsive" /> </a> </li>
                    <li> <a href="https://twitter.com/PrefMairipora"> <img src="App_Imagens/Layout/logo-twitter.png" alt="Twitter" class="img-responsive" /> </a> </li>
                    <li> <a href="https://plus.google.com/113638927898804842760"> <img src="App_Imagens/Layout/logo-GPlus.png" alt="Google+" class="img-responsive" /> </a> </li>
                </ul>               
            </div>
            <div class="pull-right QuebrarLinha hidden-xs hidden-sm hidden-md">
                <h3><b class="LetrasBrancas">Por uma Cidade Melhor!</b></h3>
            </div>
            
        </header>';
}else{
    
echo '<header class="BackHeader">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                <a href="/"> <img src="App_Imagens/Logo_Prefeitura-menor.png" class="img-responsive" alt="Prefeitura de Mairiporã"> </a>               
            </div>
            <nav class="navbar navbar-default col-xs-12 col-sm-7 col-md-7 col-lg-9">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                    <ul class="nav nav-pills navbar-right MenuPills">

                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Governo <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="sobre-prefeito-de-mairipora">Prefeito</a></li>
                            <li><a href="sobre-vice-prefeito-de-mairipora">Vice-Prefeito</a></li>
                            <li><a href="lista-secretarias">Secretários</a></li>
                            <li class="divider"></li>
                            <li><a href="secretaria-do-meio-ambiente">Secretaria do Meio Ambiente</a></li>
                        </ul>
                      </li>
                      <li role="presentation"><a href="imprensa-oficial">Imprensa Oficial</a></li>
                      <li role="presentation"><a href="audiencia-publica">Audiência Pública</a></li>

                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Portal Transparência <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.topdata-info.com.br/contaspublicas/prefeitura/anos.php?municipios=mairipora">Contas Públicas</a></li>
                            <li><a href="http://leideacesso.etransparencia.com.br/mairipora.prefeitura.sp/Portal/desktop.html?340">Portal Transparência</a></li>
                        </ul>
                      </li>

                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Leis e Decretos <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.topdata-info.com.br/contaspublicas/prefeitura/anos.php?municipios=mairipora">Leis Municipais</a></li>
                            <li><a href="http://leideacesso.etransparencia.com.br/mairipora.prefeitura.sp/Portal/desktop.html?340">Câmara de Mairiporã</a></li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tribunal de Contas<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="App_Uploads/Menu/Parecer-TC-2013.pdf">Parecer TCE 2013</a></li>              
                        </ul>
                      </li>

                      <li role="presentation"><a href="fale-conosco">Fale Conosco</a></li>
                    </ul>
                </div>
            </nav>    
            <select class="pull-right QuebrarLinha form-control SelectMenu" onchange="window.open(\'\' + this.value,\'_self\');">
                <option value="Index.php" selected="selected">
                    Selecione uma Página
                </option>
                <option value="concursos">
                    Concursos
                </option>
                <option value="lista-concursos-estagiario-mairipora">
                    Concurso Estágiario
                </option>
                <option value="lista-concursos-editais-mairipora">
                    Concursos Editais
                </option>
                <option value="calendario-de-eventos-mairipora">
                    Calendário de Eventos
                </option>
                <option value="menu-de-servicos">
                    Serviços
                </option>
                <option value="documentos-licitacao">
                    Licitações
                </option>
                <option value="painel-de-licitacoes">
                    Painel de Licitações
                </option>
                <option value="cadastro-de-fornecedores">
                    Cadastro de Fornecedores
                </option>
                <option value="ouvidoria">
                    Ouvidoria
                </option>
                <option value="horario-atendimento">
                    Horário de Atendimento
                </option>
                <option value="lista-noticias">
                    Todas Notícias
                </option>
                <option value="legislacoes">
                    Legislações
                </option>
                <option value="tabelas-repasse-recursos-federais">
                    Repasse Federal
                </option>
                <option value="lista-emails">
                    Lista de E-mails
                </option>
                <option value="telefones-para-contato">
                    Lista de Telefones
                </option>
            </select>
            <div class="row col-xs-12 pull-right QuebrarLinha">           
                <ul class="Header_social pull-right">
                    <li> <a href="https://www.facebook.com/prefeiturademairipora/"> <img src="App_Imagens/Layout/logo-facebook.png" alt="Facebook" class="img-responsive" /> </a> </li>
                    <li> <a href="https://www.youtube.com/channel/UC1OSbrK1eHiB5WKOmPpmkWw/videos"> <img src="App_Imagens/Layout/logo-youtube.png" alt="Youtube" class="img-responsive" /> </a> </li>
                    <li> <a href="https://twitter.com/PrefMairipora"> <img src="App_Imagens/Layout/logo-twitter.png" alt="Twitter" class="img-responsive" /> </a> </li>
                    <li> <a href="https://plus.google.com/113638927898804842760"> <img src="App_Imagens/Layout/logo-GPlus.png" alt="Google+" class="img-responsive" /> </a> </li>
                </ul>               
            </div>
            
        </header>';
}
        
?>