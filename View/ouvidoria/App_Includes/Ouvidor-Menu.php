<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../OuvidorGeral/Dashboard.php">
            <img src="../../../App_Imagens/Logo_Prefeitura-menor-fundo-branco-prefeitura.png" class="img-thumbnail" alt="logo Prefeitura de Mairiporã">
        </a>
    </div>

    <ul class="nav navbar-right top-nav">
        <li>
            <a>Online: <b><?php echo $_SESSION['user_nome']; ?> </b></a>
        </li>
        <li>
            <a href="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i></a>
        </li>            
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> <b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-fw fa-user"></i> Editar Perfil</a></li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Mudar Senha</a></li>
                <li class="divider"></li>
                <li><a href="../../../Controller/login-controller/logoutOuvidor-controller.php"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="NavbarLeft" class="nav navbar-nav side-nav">                     
            <li>
                <a href="../../../View/ouvidoria/OuvidorGeral/ManutencaoOuvidor.php"><i class="fa fa-fw fa-user"></i> Sobre Ouvidor</a>
            </li> 
            <li>
                <a href="../../../View/ouvidoria/OuvidorGeral/ListaReclamacoes.php"><i class="fa fa-fw fa-comments"></i> Responder Cidadão</a>
            </li>
            <li>
                <a href="../../../View/ouvidoria/OuvidorGeral/CadastrarReclamacaoViaOuvidor.php"><i class="fa fa-pencil"></i> Reclamação via Ouvidor</a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-list-alt"></i> Lista Auxiliares <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-1" class="collapse">
                    <li><a href="../../../View/ouvidoria/OuvidorGeral/ManutencaoAuxiliar.php?p=Denuncia"><i class="fa fa-angle-double-right"></i> Denúncia</a></li>
                    <li><a href="../../../View/ouvidoria/OuvidorGeral/ManutencaoAuxiliar.php?p=Reclamacao"><i class="fa fa-angle-double-right"></i> Reclamação</a></li>
                    <li><a href="../../../View/ouvidoria/OuvidorGeral/ManutencaoAuxiliar.php?p=Solicitacao"><i class="fa fa-angle-double-right"></i> Solicitação</a></li>
                    <li><a href="../../../View/ouvidoria/OuvidorGeral/ManutencaoAuxiliar.php?p=Sugestao"><i class="fa fa-angle-double-right"></i> Sugestão</a></li>
                    <li><a href="../../../View/ouvidoria/OuvidorGeral/ManutencaoAuxiliar.php?p=Elogio"><i class="fa fa-angle-double-right"></i> Elogio</a></li>
                </ul>
            </li>     
        </ul>
    </div>

</nav>