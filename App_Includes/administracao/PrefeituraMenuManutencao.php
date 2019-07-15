<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../../View/prefeitura/Dashboard.php">
            <img src="../../App_Imagens/Logo_Prefeitura-menor-fundo-branco-prefeitura.png" class="img-thumbnail" alt="logo Prefeitura de Mairiporã">
        </a>
    </div>

    <ul class="nav navbar-right top-nav">
        <li>
            <a>Olá: <b><?php echo $_SESSION['user_nome']; ?></b> </a>
        </li>
        <li>
            <a href="../../View/prefeitura/Dashboard.php" data-placement="bottom" data-toggle="tooltip" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i></a>
        </li>            
        <li class="dropdown">          
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> <b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-fw fa-user"></i> Editar Perfil</a></li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Mudar Senha</a></li>
                <li class="divider"></li>
                <li><a href="../../Controller/login-controller/logoutPrefeitura-controller.php"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="NavbarLeft" class="nav navbar-nav side-nav">               
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-newspaper-o"></i>  Notícias <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-1" class="collapse">
                    <li><a href="../../View/prefeitura/Manutencao-Noticias.php"><i class="fa fa-angle-double-right"></i> Postagem Notícias</a></li>
                    <li><a href="../../View/prefeitura/Manutencao-Imprensa.php"><i class="fa fa-angle-double-right"></i> Imprensa Oficial</a></li>
                </ul>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-Governo.php"><i class="fa fa-fw fa-university"></i> Governo</a>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-Comunicado-Importante.php"><i class="fa fa-fw fa-bullhorn"></i>  Comunicado Importante</a>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-Eventos.php"><i class="fa fa-fw fa-calendar"></i> Eventos</a>
            </li>          
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-graduation-cap"></i>  Lista de Concursos <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-2" class="collapse">
                    <li><a href="../../View/prefeitura/Manutencao-Lista-Concurso-Edital.php"><i class="fa fa-angle-double-right"></i> Editais</a></li>
                    <li><a href="../../View/prefeitura/Manutencao-Lista-Concurso-Estagiario.php"><i class="fa fa-angle-double-right"></i> Estagiários</a></li>
                </ul>
            </li>           
            <li>
                <a href="../../View/prefeitura/Manutencao-Lista-Creche.php"><i class="fa fa-fw fa-book"></i> Lista de Creches</a>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-Usuario.php"><i class="fa fa-fw fa fa-users"></i> Usuários</a>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-Telefone.php"><i class="fa fa-fw fa fa-phone"></i> Telefones</a>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-RepasseFederal.php"><i class="fa fa-fw fa fa-table"></i> Repasse Federal</a>
            </li>
            <li><a href="../../View/prefeitura/Manutencao-Audiencia-Publica.php"><i class="fa fa-fw fa fa-check-square-o"></i> Audiência Pública</a></li>
            
            <li>
                <a href="../../View/prefeitura/Manutencao-Email.php"><i class="fa fa-fw fa fa-envelope"></i> E-mails</a>
            </li>
            <li>
                <a href="../../View/prefeitura/Manutencao-Meio-Ambiente.php"><i class="fa fa-fw fa fa-envira"></i> Meio Ambiente</a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-upload"></i> Uploads <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-3" class="collapse">
                    <li><a href="../../View/prefeitura/Manutencao-ImagensNoticias.php"><i class="fa fa-angle-double-right"></i> Imagens Notícias </a></li>
                    <li><a href="../../View/prefeitura/Manutencao-PdfImprensa.php"><i class="fa fa-angle-double-right"></i> PDF Imprensa</a></li>
                    <li><a href="../../View/prefeitura/Manutencao-ImagensGoverno.php"><i class="fa fa-angle-double-right"></i> Imagens Governo</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Imagens Eventos</a></li>
                </ul>
            </li>
        </ul>
    </div>

</nav>