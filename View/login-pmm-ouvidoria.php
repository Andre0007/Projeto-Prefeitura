<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">   
    <?php $titulo = 'Ouvidoria Digital'; include '../App_Includes/administracao/HeaderLogin.php'; ?> 
    
    <body class="backOuvidoria" ng-controller="ControllerOuvidoria">

        <div class="container">

            <div class="row" id="pwd-container">
                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <section class="login-form">
                        <div class="<?php echo !empty($_SESSION['count_erro']) ? 'alert alert-danger' : '' ?>" role="alert">
                            <?php 
                                if(!empty($_SESSION['Compos_vazio'])) { 
                                   echo $_SESSION['Compos_vazio'];
                                   unset($_SESSION['Compos_vazio']);
                                   $_SESSION['count_erro'] = '';
                                }else if(!empty($_SESSION['validar_Compos'])){
                                   echo $_SESSION['validar_Compos'];
                                   unset($_SESSION['validar_Compos']);
                                   $_SESSION['count_erro'] = '';
                                }
                            ?>   
                        </div>
                        <form name="form_login" action="../Controller/login-controller/loginLicitacao-controller.php" method="post" role="login">                      
                            <img src="../App_Imagens/Logo_Prefeitura-menor.png" class="img-responsive" alt="Logo Prefeitura" />                           
                            <input type="text" name="email" id="email" placeholder="E-mail" class="form-control input-lg">                      
                            <input type="password" name="senha" id="password" placeholder="Senha" class="form-control input-lg">                          
                            <input type="submit" value="Entrar" class="btn btn-lg btn-primary btn-block">      
                            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalEsqSenha">Esqueci a Senha</button>
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModalRegistrar">Registre-se agora!</button>
                        </form>
                                                                         
                    </section>  
                </div>

            </div>

        </div><!-- Fim Container -->
        
        
        <div class="modal fade" id="myModalRegistrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header ">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Formulário de Cadastro</h4>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <form name="userForm" novalidate>

                            <div class="col-md-6">                                                
                                <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
                                     <label>Nome Completo</label>
                                     <input type="text" name="name" maxlength="200" class="form-control" ng-model="user.name" required>
                                     <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">Seu nome é obrigatório</p>
                                </div>

                                <div class="form-group" ng-class="{ 'has-error' : userForm.cpf.$invalid && !userForm.cpf.$pristine }">
                                     <label>CPF</label>
                                     <input id="cpf" type="text" name="cpf" class="form-control" ng-model="user.cpf" ng-cpf required>
                                     <p ng-show="userForm.cpf.$error.required && !userForm.cpf.$pristine" class="help-block">O Campo CPF é obrigatório</p>
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

                                <div class="form-group" ng-class="{ 'has-error' : userForm.senha.$invalid && !userForm.senha.$pristine }">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control" ng-model="user.senha" required>
                                    <p ng-show="userForm.senha.$error.required && !userForm.senha.$pristine" class="help-block">O Campo Senha é obrigatório</p>
                                </div>

                                <div class="form-group" ng-class="{ 'has-error' : userForm.senhaConfir.$invalid && !userForm.senhaConfir.$pristine }">
                                    <label>Confirmar Senha</label>
                                    <input type="password" name="senhaConfir" class="form-control" ng-model="user.senhaConfir" required>
                                    <p ng-show="userForm.senhaConfir.$error.required && !userForm.senhaConfir.$pristine" class="help-block">O Campo Confirmar Senha é obrigatório</p>
                                </div>

                            </div>

                            <div class="col-md-6">                                                

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

    <script src="../App_Scripts/jquery-1.12.4.min.js"></script>
    <script src="../App_Bootstrap/Framework-Bootstrap/js/bootstrap.min.js"></script>   
    <script src="../App_Scripts/Apps_Angular/angular.min.js"></script>
    <script src="../App_Scripts/Apps_Angular/angular.cpf.min.js"></script>
    <script src="../App_Scripts/Apps_Angular/ngCpfCnpj.js"></script>        
    <script src="../App_Scripts/jquery.maskedinput.min.js"></script>       
    <script src="../App_Scripts/Controller/Ouvidoria/ControllerOuvidoria.js"></script> 
    </body>       
</html>