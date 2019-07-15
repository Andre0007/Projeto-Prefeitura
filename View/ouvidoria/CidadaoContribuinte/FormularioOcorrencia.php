<!DOCTYPE html>
<html lang="pt-br">   
    <?php $pagina = 'FormOcorrencia'; $titulo = 'Formulário de Ocorrencia'; include '../App_Includes/Cidadao-Header.php'; ?>    
    
    <body> 
        <?php include_once("../../../App_Includes/analyticstracking.php") ?>

        <?php include '../App_Includes/Cidadao-Menu.php'; ?>

        <div class="container">

            <div class="page-header text-center LetrasAzul">
                <h1>Escolha o assunto e descreva o problema</h1>
            </div>
            
            <div class="col-md-10 CentralizarSemThumb">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="form-group" ng-class="{ 'has-error' : userForm.uf.$invalid && !userForm.uf.$pristine }">
                            <label>Assunto:</label>
                            <select id="uf" ng-model="IDufSelected" class="form-control" required>
                               <option value="">Selecione o Assunto</option>
                            </select>
                            <p ng-show="userForm.uf.$error.required && !userForm.uf.$pristine" class="help-block">O Campo UF é obrigatório</p>
                        </div>

                        <div class="form-group" ng-class="{ 'has-error' : contactForm.mensagem.$invalid && !contactForm.mensagem.$pristine }">
                            <label>Mensagem:</label>
                            <textarea name="mensagem" id="message" class="form-control LetrasBrancas" ng-model="mensagem" rows="6" placeholder="Mensagem" required></textarea>
                            <p ng-show="contactForm.mensagem.$invalid && !contactForm.mensagem.$pristine" class="help-block">O campo mensagem é obrigatório</p>
                        </div> 
                    </div>
                    <div class="panel-footer text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>                                        
                        <button type="button" ng-click="submitForm()" ng-disabled="userForm.$invalid" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
            
        </div>       
        
        <?php include '../App_Includes/Cidadao-Footer.php'; ?>  
    </body>
</html>