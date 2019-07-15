<?php
session_start();
require '../../Controller/login-controller/checkPrefeitura-controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php $pagina = 'Dashboard'; $titulo = 'Resumo do Sistema'; include '../../App_Includes/administracao/PrefeituraHeaderManutencao.php'; ?>

    <body>   

        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">

        <?php include '../../App_Includes/administracao/PrefeituraMenuManutencao.php'; ?>       

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row" id="main" >
                        
                        <div class="col-sm-12 col-md-12 well" id="content">
                            <h1>Dashboard do Sistema</h1>
                        </div>
                        
                    </div><!-- /.row -->              
                </div><!-- /.container-fluid -->           
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->

        <?php include '../../App_Includes/administracao/FooterAdministracao.php'; ?>
    </body>
</html>