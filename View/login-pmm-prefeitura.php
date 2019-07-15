<?php session_start(); ?>
<!DOCTYPE html>
<html>
    
    <?php $titulo = 'Prefeitura'; include '../App_Includes/administracao/HeaderLogin.php'; ?>

    <body class="backPrefeitura">

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
                        <form action="../Controller/login-controller/loginPrefeitura-controller.php" method="post" role="login">                
                            <img src="../App_Imagens/Logo_Prefeitura-menor.png" class="img-responsive" alt="Logo Prefeitura" />                           
                            <input type="text" name="email" id="email" placeholder="Usuario ou E-mail" class="form-control input-lg">                      
                            <input type="password" name="senha" id="password" placeholder="Senha" class="form-control input-lg">                          
                            <input type="submit" value="Entrar" class="btn btn-lg btn-primary btn-block">                            
                        </form>

                    </section>  
                </div>

            </div>

        </div><!-- Fim Container -->

    </body>
</html>