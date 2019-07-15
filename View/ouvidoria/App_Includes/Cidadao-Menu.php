<header>
    <div class="container LetrasAzul">
        <div class="row">
            <div class="col-md-12">
                <a href="../../../View/ouvidoria/CidadaoContribuinte/Home.php">
                    <img src="../../../App_Imagens/Logo_Prefeitura-menor.png" class="img-responsive" alt="logo Prefeitura de Mairiporã">
                </a>
            </div>           
        </div>
        <div class="row">
            <div class="col-md-7">
                <b>Sistema de Ouvidoria da Prefeitura de Mairiporã</b>
            </div>
            <div class="col-md-5 text-right">               
                <b>Sábado, 21/03/2017</b>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-inverse" role="navigation">
    
    <div class="container">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse">            
            <ul class="nav navbar-nav">
                <li class="<?php if($pagina == 'Home') echo'active' ?>"><a href="../CidadaoContribuinte/Home.php">Início</a></li>
                <li class="<?php if($pagina == 'SobreOuvidor') echo'active' ?>"><a href="../CidadaoContribuinte/SobreOuvidor.php">Sobre o Ouvidor</a></li>
                <li class="<?php if($pagina == 'ListaReclamacoes') echo'active' ?>"><a href="../CidadaoContribuinte/ListaReclamacoes.php">Lista Reclamações</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown <?php if($pagina == 'EditarMeusDados') echo'active' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../CidadaoContribuinte/EditarMeusDados.php"><i class="fa fa-fw fa-user"></i> Editar Informações</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-cog"></i> Mudar Senha</a></li>
                        <li class="divider"></li>
                        <li><a href="../../Controller/login-controller/logoutLicitacao-controller.php"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
                    </ul>
                </li>
            </ul>           
        </div><!-- /.navbar-collapse -->
        
    </div>
</nav>