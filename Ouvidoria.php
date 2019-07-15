<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'Ouvidoria'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Ouvidoria'; include './App_Includes/Header.php'; ?>  
   
    <body ng-controller="ControllerOuvidoria">
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?>

        <main class="ConteudoCentral">          
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12 col-md-12"> 
                        <div class="title_area">
                            <h2 class="title_two">Ouvidoria</h2>
                            <span></span>                    
                        </div>
                    </div>
                </div>

                <div class="col-md-12">  

                    <div class="col-md-10 CentralizarSemThumb">
                        
                        
                        <div class="panel panel-default">
                            <div class="panel-heading Negrito">Sistema de Ouvidoria Digital </div>
                            <div class="panel-body">

                                    
                                <div id="login-overlay" class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">                                           
                                            <h4 class="modal-title" id="myModalLabel">Painel de Acesso</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="well">
                                                        <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                                            <div class="form-group">
                                                                <label for="username" class="control-label">E-mail</label>
                                                                <input type="text" class="form-control" id="username" name="username" title="Please enter you username" placeholder="exemplo@gmail.com" required>
                                                                <span class="help-block"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password" class="control-label">Senha</label>
                                                                <input type="password" class="form-control" id="password" name="password" title="Please enter your password" placeholder="Senha" required>
                                                                <span class="help-block"></span>
                                                            </div>
                                                            <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                                            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalEsqSenha">Esqueci a Senha</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p class="lead">Você não possui <span class="text-primary">acesso?</span></p>
                                                    <p>O Serviço "Atendimento ao Cidadão", da Prefeitura de Mairiporã, proporciona aos cidadãos, 
                                                        livre acesso para apresentarem suas reclamações, denúncias ou sugestões relativas à qualidade 
                                                        e prestação de serviços no âmbito municipal.
                                                    </p>
                                                    <p> <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModalRegistrar">Registre-se agora!</button> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="myModalRegistrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header ">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">Formulário de Cadastro <b>Pessoa Física / Pessoa Jurídica</b></h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                            
                                                <form name="userForm" novalidate>
                                                    
                                                    <div class="col-md-6">                                                
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.nome.$invalid && !userForm.nome.$pristine }">
                                                             <label>Nome / Empresa</label>
                                                             <input type="text" name="name" maxlength="200" class="form-control" ng-model="user.nome" required>
                                                             <p ng-show="userForm.nome.$invalid && !userForm.nome.$pristine" class="help-block">Seu nome é obrigatório</p>
                                                        </div>
                                                        
                                                        <div id="CampoCnpj" class="form-group" ng-class="{ 'has-error' : userForm.cnpj.$invalid && !userForm.cnpj.$pristine }">
                                                             <label>CNPJ</label>
                                                             <input id="cnpj" type="text" name="cnpj" class="form-control" ng-model="user.cnpj" ng-cnpj>
                                                             <p ng-show="userForm.cnpj.$invalid && !userForm.cnpj.$pristine" class="help-block">Informe um CNPJ válido.</p>
                                                        </div>
                                                        
                                                        <div id="CampoCpf" class="form-group" ng-class="{ 'has-error' : userForm.cpf.$invalid && !userForm.cpf.$pristine }">
                                                             <label>CPF</label>
                                                             <input id="cpf" type="text" name="cpf" class="form-control" ng-model="user.cpf" ng-cpf>
                                                             <p ng-show="userForm.cpf.$invalid && !userForm.cpf.$pristine" class="help-block">Informe um CPF válido.</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.rg.$invalid && !userForm.rg.$pristine }">
                                                             <label>RG</label>
                                                             <input id="rg" type="text" name="rg" maxlength="10" class="form-control" ng-model="user.rg" required>
                                                             <p ng-show="userForm.rg.$error.required && !userForm.rg.$pristine" class="help-block">O Campo RG é obrigatório</p>                                                             
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.dataNasci.$invalid && !userForm.dataNasci.$pristine }">
                                                             <label>Data Nascimento</label>
                                                             <input id="data_nascimento" type="text" name="dataNasci" class="form-control" ng-model="user.dataNasci" required>
                                                             <p ng-show="userForm.dataNasci.$error.required && !userForm.dataNasci.$pristine" class="help-block">O Campo Data de Nascimento é obrigatório</p>
                                                             <p ng-show="userForm.dataNasci.$invalid && !userForm.dataNasci.$pristine" class="help-block">Informe um Data válida.</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.sexo.$invalid && !userForm.sexo.$pristine }">
                                                            <label>Sexo</label>
                                                            <select ng-model="IDsexoSelected" class="form-control" required>
                                                               <option value="">Selecione o Sexo</option>
                                                               <option value="1">Masculino</option>
                                                               <option value="2">Feminino</option>
                                                            </select>
                                                            <p ng-show="userForm.sexo.$error.required && !userForm.sexo.$pristine" class="help-block">O Campo Sexo é obrigatório</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
                                                            <label>E-mail</label>
                                                            <input type="email" name="email" maxlength="90" class="form-control" ng-model="user.email" required>
                                                            <p ng-show="userForm.email.$error.required && !userForm.email.$pristine" class="help-block">O Campo e-mail é obrigatório</p>
                                                            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Informe um e-mail válido.</p>
                                                        </div>

                                                        <div class="form-group">
                                                             <label>Ponto de Referência</label>
                                                             <input type="text" name="pontoRef" maxlength="100" class="form-control" ng-model="user.pontoRef">
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.senha.$invalid && !userForm.senha.$pristine }">
                                                            <label>Senha</label>
                                                            <input type="password" name="senha" class="form-control" ng-model="user.senha" required>
                                                            <p ng-show="userForm.senha.$error.required && !userForm.senha.$pristine" class="help-block">O Campo Senha é obrigatório</p>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-md-6">                                                
                                                        
                                                        <div class="form-group">
                                                            <label>Pessoa</label>
                                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                                <label class="btn btn-default" onclick="cpf()">
                                                                  <input type="radio" name="options" value="CPF" autocomplete="off" checked=""> CPF
                                                                </label>
                                                                <label class="btn btn-default active" onclick="cnpj()">
                                                                  <input type="radio" name="options" value="CNPJ" autocomplete="off"> CNPJ
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.cep.$invalid && !userForm.cep.$pristine }">
                                                            <label>CEP</label>
                                                            <input id="cep" type="text" name="cep" class="form-control" ng-model="user.cep" required>
                                                            <p ng-show="userForm.cep.$error.required && !userForm.cep.$pristine" class="help-block">O Campo CEP é obrigatório</p>                                                           
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.numero.$invalid && !userForm.numero.$pristine }">
                                                             <label>Número</label>
                                                             <input id="numero" type="text" name="numero" maxlength="5" class="form-control" ng-model="user.numero" required>
                                                             <p ng-show="userForm.numero.$error.required && !userForm.numero.$pristine" class="help-block">O Campo Número é obrigatório</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.bairro.$invalid && !userForm.bairro.$pristine }">
                                                            <label>Bairro</label>
                                                            <input id="bairro" type="text" name="bairro" maxlength="100" class="form-control" ng-model="user.bairro" required>
                                                            <p ng-show="userForm.bairro.$error.required && !userForm.bairro.$pristine" class="help-block">O Campo Bairro é obrigatório</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.cidade.$invalid && !userForm.cidade.$pristine }">
                                                             <label>Cidade</label>
                                                             <input id="cidade" type="text" name="cidade" maxlength="100" class="form-control" ng-model="user.cidade" required>
                                                             <p ng-show="userForm.cidade.$error.required && !userForm.cidade.$pristine" class="help-block">O Campo Cidade é obrigatório</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.uf.$invalid && !userForm.uf.$pristine }">
                                                            <label>UF</label>
                                                            <select id="uf" ng-model="IDufSelected" class="form-control" required>
                                                               <option value="">Selecione o Estado</option>
                                                               <option value="AC">AC - Acre</option>
                                                               <option value="AL">AL - Alagoas</option>
                                                               <option value="AP">AP - Amapá</option>
                                                               <option value="AM">AM - Amazonas</option>
                                                               <option value="BA">BA - Bahia</option>
                                                               <option value="CE">CE - Ceará</option>
                                                               <option value="DF">DF - Distrito Federal</option>
                                                               <option value="ES">ES - Espírito Santo</option>
                                                               <option value="GO">GO - Goiás</option>
                                                               <option value="MA">MA - Maranhão</option>
                                                               <option value="MT">MT - Mato Grosso</option>
                                                               <option value="MS">MS - Mato Grosso do Sul</option>
                                                               <option value="MG">MG - Minas Gerais</option>
                                                               <option value="PA">PA - Pará</option>
                                                               <option value="PB">PB - Paraíba</option>
                                                               <option value="PR">PR - Paraná</option>
                                                               <option value="PE">PE - Pernambuco</option>
                                                               <option value="PE">PI - Piauí</option>
                                                               <option value="RJ">RJ - Rio de Janeiro</option>
                                                               <option value="RN">RN - Rio Grande do Norte</option>
                                                               <option value="RS">RS - Rio Grande do Sul</option>
                                                               <option value="RO">RO - Rondônia</option>
                                                               <option value="RR">RR - Roraima</option>
                                                               <option value="SC">SC - Santa Catarina</option>
                                                               <option value="SP">SP - São Paulo</option>
                                                               <option value="SE">SE - Sergipe</option>
                                                               <option value="TO">TO - Tocantins</option>
                                                            </select>
                                                            <p ng-show="userForm.uf.$error.required && !userForm.uf.$pristine" class="help-block">O Campo UF é obrigatório</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.tel.$invalid && !userForm.tel.$pristine }">
                                                             <label>Telefone/Celular</label>
                                                             <input id="telefone" type="text" name="tel" class="form-control" ng-model="user.tel" required>
                                                             <p ng-show="userForm.tel.$error.required && !userForm.tel.$pristine" class="help-block">O Campo Telefone é obrigatório</p>
                                                        </div>
                                                        
                                                        <div class="form-group" ng-class="{ 'has-error' : userForm.endereco.$invalid && !userForm.endereco.$pristine }">
                                                             <label>Endereço</label>
                                                             <input id="endereco" type="text" maxlength="90" name="endereco" class="form-control" ng-model="user.endereco" required>
                                                             <p ng-show="userForm.endereco.$error.required && !userForm.endereco.$pristine" class="help-block">O Campo Endereço é obrigatório</p>
                                                        </div>                                                
                                                        
                                                        <div class="form-group">
                                                             <label>Complemento</label>
                                                             <input id="completo" type="text" maxlength="50" name="completo" class="form-control" ng-model="user.completo">                                                           
                                                        </div>
                                                        
                                                    </div>

                                                </form>
                                              
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>                                        
                                          <button type="button" ng-click="submitForm()" ng-disabled="userForm.$invalid" class="btn btn-primary">Registrar</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="modal fade" id="myModalEsqSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">Esqueci a Senha</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form name="userSenha" novalidate> 
                                                
                                                <div class="form-group" ng-class="{ 'has-error' : userSenha.emailEsq.$invalid && !userSenha.emailEsq.$pristine }">
                                                    <label for="email" class="cols-sm-2 control-label">E-mail</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                            <input type="email" class="form-control" name="emailEsq" ng-model="user.emailEsq" id="emailEsq" placeholder="Digite seu E-mail" required/>                                                            
                                                        </div>
                                                        <p ng-show="userSenha.emailEsq.$error.required && !userSenha.emailEsq.$pristine" class="help-block">O Campo e-mail é obrigatório</p>
                                                        <p ng-show="userSenha.emailEsq.$invalid && !userSenha.emailEsq.$pristine" class="help-block">Informe um e-mail válido.</p>
                                                    </div>
                                                </div>  
                                                
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>                                        
                                          <button type="button" ng-click="submitSenha()" ng-disabled="userSenha.$invalid" class="btn btn-primary">Enviar</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                    
                        
                        <!--
                        <div class="panel panel-default">
                            <div class="panel-heading Negrito">Informe <i class="fa fa-warning"></i> </div>
                            <div class="panel-body">
                                <p>
                                    Para encaminhar solicitações para a administração, você deve primeiramente procurar o setor competente, pessoalmente ou pelo telefone: 4419-8000.
                                </p>
                                <p>
                                    O munícipe pode recorrer a Ouvidoria, somente quando o setor competente não solucionar o seu problema, receber atendimento inadequado, resposta insatisfatória
                                    ou identificar irregularidade grave cometida por algum funcionário.
                                </p>
                                <p>
                                    Quando solicitada, a Ouvidoria preserva a identidade dos envolvidos e mantém sigilo absoluto sobre as informações tratadas.
                                </p>
                            </div>
                        </div> -->
                        
                        <div class="panel panel-default">
                            <div class="panel-heading Negrito"><h1>Ouvidoria Geral</h1></div>
                            <div class="panel-body text-center">
                                Atendimento aos Munícipes <p class="Negrito">De segunda à sexta</p>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item"><i class="fa fa-map-marker"></i> Alameda Tibiriça, 374 - Vila Nova</li>
                                <li class="list-group-item"><i class="fa fa-clock-o"></i> Funcionamento das 08:00 às 12:30 e das 14:00 às 16:00</li>
                                <li class="list-group-item"><i class="fa fa-envelope"></i> ouvidoria@mairipora.sp.gov.br</li>
                                <li class="list-group-item"><i class="fa fa-phone"></i> (11)4419-8027</li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </main>  

        <?php include './App_Includes/Footer.php'; ?>    
    </body>
</html>