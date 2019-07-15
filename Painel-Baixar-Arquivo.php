<?php 
    $redirect = "painel-de-licitacoes";
    echo empty($_GET['id']) || !is_numeric($_GET['id']) ? header("location:$redirect") : ""; session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
    
    <?php $pagina = 'BaixarLicitacoes'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Painel de Download Licitações'; include './App_Includes/Header.php'; ?>  
    
    <body>
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>

        <main id="Licitacao">
            <div class="container">

                <div class="row main">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2 class="title">Insira seus dados antes de baixar o arquivo</h2>
                            <hr />
                        </div>
                    </div>
                    
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
                    
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="Controller/Licitacao/download-controller/create.php">

                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_GET['id']; ?>" />
                            
                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Nome</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa"></i></span>
                                        <input type="text" class="form-control" name="nome" id="nome"  placeholder="Seu nome ou da empresa" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn btn-default" onclick="cpf()">
                                      <input type="radio" name="options" value="CPF" autocomplete="off" checked=""> CPF
                                    </label>
                                    <label class="btn btn-default active" onclick="cnpj()">
                                      <input type="radio" name="options" value="CNPJ" autocomplete="off"> CNPJ
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="name" id="label" class="cols-sm-2 control-label">   </label>
                                <div class="cols-sm-10">
                                    <div id="CampoCpfCnpj" class="input-group">
                                        <span class="input-group-addon"><i id="Icon" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="cpfcnpj" id="cpfcnpj" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa"></i></span>
                                        <input type="text" class="form-control" name="email" id="email"  placeholder="Insira o email" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label">Telefone</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa"></i></span>
                                        <input type="text" class="form-control" name="telefone" id="telefone"  placeholder="Informe o telefone" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <button id="botao" type="submit"  class="btn btn-success btn-lg btn-block login-button"> <i class="fa fa-download"></i> Baixar</button>
                                <a class="btn btn-primary btn-lg btn-block login-button" href="painel-de-licitacoes">  <i class="fa fa-arrow-circle-left"></i> Voltar </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </main>  

        <?php include './App_Includes/Footer.php'; ?>      
    </body>
</html>