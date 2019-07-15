<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">   
    
    <?php $pagina = 'FaleConosco'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Fale Conosco'; include './App_Includes/Header.php'; ?>  
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>     
        
        <?php include './App_Includes/Menu.php'; ?> 

        <main class="ConteudoCentral">
            <section class="ConteudoSection">
                <div class="container">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-12 col-md-12"> 
                                <div class="title_area">
                                    <h2 class="title_two">Fale Conosco</h2>
                                    <span></span> 
                                    <p>Através das opções abaixo clique e veja a lista completa ou preencha o formulário de contato nos envie um e-mail:</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">                       
                            <div class="col-md-4 col-sm-12 col-xs-12 Contatos text-right">
                                <div class="update-nag">
                                    <a href="horario-atendimento">
                                        <div class="update-split"><i class="fa fa-clock-o"></i></div>
                                        <div class="update-text">Horário de Atendimento</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                                <div class="update-nag">
                                    <a href="lista-emails">
                                        <div class="update-split update-danger"><i class="fa fa-at"></i></div>
                                        <div class="update-text">E-mails para Contato</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 Contatos col-xs-12">
                                <div class="update-nag">
                                    <a href="telefones-para-contato">
                                        <div class="update-split update-info"><i class="fa fa-phone"></i></div>
                                        <div class="update-text">Telefones para contato</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section>
                <iframe id="Mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.8396688094576!2d-46.58862203592678!3d-23.32157529892757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2aedb35596f0f3b8!2sPrefeitura+Municipal+de+Mairipor%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1483965268588" class="TamanhoIframe" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" style="border:0"></iframe>
            </section>

            <section id="Contato" class="parallax">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="col-lg-12 col-md-12"> 
                            <div class="title_area Formulario">
                                <h2 class="title_two">Formulário de Contato</h2>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">

                                <form id="main-contact-form" name="contactForm" novalidate>
                                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group" ng-class="{ 'has-error' : contactForm.nome.$invalid && !contactForm.nome.$pristine }">
                                                <input type="text" name="nome" class="form-control LetrasBrancas" ng-model="nome" placeholder="Nome" required>
                                                <p ng-show="contactForm.nome.$invalid && !contactForm.nome.$pristine" class="help-block">Seu nome é obrigatório</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group" ng-class="{ 'has-error' : contactForm.email.$invalid && !contactForm.email.$pristine }">
                                                <input type="email" name="email" class="form-control LetrasBrancas" ng-model="email" placeholder="E-mail" required>
                                                <p ng-show="contactForm.email.$error.required && !contactForm.email.$pristine" class="help-block">O Campo e-mail é obrigatório</p>
                                                <p ng-show="contactForm.email.$invalid && !contactForm.email.$pristine" class="help-block">Informe um e-mail válido.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="departamento" ng-model="IDepartamentoSelected" class="form-control" required>
                                            <option value="">--Selecione um departamento--</option>
                                            <option value="1">Gestão Pública</option>
                                            <option value="2">Informática</option>
                                            <option value="3">Assistência Social</option>
                                            <option value="4">Cultura</option>
                                            <option value="5">Educação</option>
                                            <option value="6">Esportes</option>
                                            <option value="7">Fazenda</option>
                                            <option value="8">Governo</option>
                                            <option value="9">Juridico</option>
                                            <option value="10">Meio Ambiente e Turismo</option>
                                            <option value="11">Obras</option>
                                            <option value="12">Recursos Humanos</option>
                                            <option value="13">Relações Institucionais</option>
                                            <option value="14">Saúde</option>
                                            <option value="15">Sub Terra Preta</option>
                                            <option value="16">Coor. de Mobilidade e Segurança</option>
                                            <option value="17">Coor. de Comunicação</option>
                                        </select>
                                    </div>
                                    <div class="form-group" ng-class="{ 'has-error' : contactForm.assunto.$invalid && !contactForm.assunto.$pristine }">
                                        <input name="assunto" type="text" class="form-control LetrasBrancas" ng-model="assunto" placeholder="Assunto" required>
                                        <p ng-show="contactForm.assunto.$invalid && !contactForm.assunto.$pristine" class="help-block">O campo assunto é obrigatório</p>
                                    </div>
                                    <div class="form-group" ng-class="{ 'has-error' : contactForm.mensagem.$invalid && !contactForm.mensagem.$pristine }">
                                        <textarea name="mensagem" id="message" class="form-control LetrasBrancas" ng-model="mensagem" rows="4" placeholder="Mensagem" required></textarea>
                                        <p ng-show="contactForm.mensagem.$invalid && !contactForm.mensagem.$pristine" class="help-block">O campo mensagem é obrigatório</p>
                                    </div>                        
                                    <div class="form-group">
                                        <button ng-click="SendMail()" ng-disabled="contactForm.$invalid" type="submit" name="enviarFormulario" class="btn btn-submit">Enviar</button>
                                    </div>
                                </form>  

                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p>Caso você prefira entrar em contato ligue para o atendimento, se tiver dúvidas.</p>
                                    <ul class="address">
                                        <li> <i class="fa fa-map-marker"></i> <span> Endereço:</span> <b> Alameda Tibiriçá, 374 - Vila Nova, 07600-000 </b> </li>
                                        <li> <i class="fa fa-phone"></i> <span> Telefone:</span> <b>(11) 4419-8000</b>  </li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            
        </main>

        <?php include './App_Includes/Footer.php'; ?>
        <toasty></toasty>
    </body>
</html>