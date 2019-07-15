<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../../View/habitacao/Dashboard.php">
            <img src="../../App_Imagens/Logo_Prefeitura-menor-fundo-branco-prefeitura.png" class="img-thumbnail" alt="logo Prefeitura de Mairiporã">
        </a>
    </div>

    <ul class="nav navbar-right top-nav">
        <li>
            <a>Online: <b><?php echo $_SESSION['user_nome']; ?> </b></a>
        </li>
        <li>
            <a href="../../View/habitacao/Dashboard.php" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i></a>
        </li>            
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> <b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-fw fa-user"></i> Editar Perfil</a></li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Mudar Senha</a></li>
                <li class="divider"></li>
                <li><a href="../../Controller/login-controller/logoutHabitacao-controller.php"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="NavbarLeft" class="nav navbar-nav side-nav">               
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-briefcase"></i> A Secretaria<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-1" class="collapse">
                    <li><a href="../../View/habitacao/ManutencaoSecretariaBiografia.php"><i class="fa fa-angle-double-right"></i> Secretária</a></li>
                    <li><a href="../../View/habitacao/ManutencaoSecretariaEquipeHabitacao.php"><i class="fa fa-angle-double-right"></i> Equipe</a></li>
                    <li><a href="../../View/habitacao/ManutencaoSecretariaAtribuicoes.php"><i class="fa fa-angle-double-right"></i> Atribuições</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-question-circle"></i> Regularização F.<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-2" class="collapse">
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoPrograma.php"><i class="fa fa-angle-double-right"></i> O que é o programa?</a></li>
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoPriorizacao.php"><i class="fa fa-angle-double-right"></i> Priorização</a></li>
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoEtapas.php"><i class="fa fa-angle-double-right"></i> Etapas</a></li>
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoAreas.php"><i class="fa fa-angle-double-right"></i> Áreas</a></li>
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoLegislacao.php"><i class="fa fa-angle-double-right"></i> Legislação</a></li>
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoPerguntasFrequentes.php"><i class="fa fa-angle-double-right"></i> Perguntas Frequentes</a></li>
                    <li><a href="../../View/habitacao/ManutencaoRegularizacaoNoticias.php"><i class="fa fa-angle-double-right"></i> Notícias</a></li>
                </ul>
            </li>        
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-home"></i> MCMV<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-3" class="collapse">
                    <li><a href="../../View/habitacao/ManutencaoMCMVPrograma.php"><i class="fa fa-angle-double-right"></i> O que é o programa?</a></li>
                    <li><a href="../../View/habitacao/ManutencaoMCMVCriterios.php"><i class="fa fa-angle-double-right"></i> Critérios de Atendimento</a></li>
                    <li><a href="../../View/habitacao/ManutencaoMCMVPerguntasFrequentes.php"><i class="fa fa-angle-double-right"></i> Perguntas Frequentes</a></li>
                    <li><a href="../../View/habitacao/ManutencaoMCMVListaHierarquizada.php"><i class="fa fa-angle-double-right"></i> Lista Hierarquizada</a></li>
                    <li><a href="../../View/habitacao/ManutencaoMCMVListaComplementar.php"><i class="fa fa-angle-double-right"></i> Lista complementar - Suplência</a></li>
                    <li><a href="../../View/habitacao/ManutencaoMCMVCronograma.php"><i class="fa fa-angle-double-right"></i> Cronograma</a></li>
                    <li><a href="../../View/habitacao/ManutencaoMCMVLegislacao.php"><i class="fa fa-angle-double-right"></i> Legislação</a></li>                    
                    <li><a href="../../View/habitacao/ManutencaoMCMVNoticias.php"><i class="fa fa-angle-double-right"></i> Notícias</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-users"></i> CMH<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-4" class="collapse">
                    <li><a href="../../View/habitacao/ManutencaoCMHConvocacoes.php"><i class="fa fa-angle-double-right"></i> Convocações</a></li>
                    <li><a href="../../View/habitacao/ManutencaoCMHLegislacoes.php"><i class="fa fa-angle-double-right"></i> Legislações</a></li>
                    <li><a href="../../View/habitacao/ManutencaoCMHReunioes.php"><i class="fa fa-angle-double-right"></i> Ata de Reuniões</a></li>
                    <li><a href="../../View/habitacao/ManutencaoCMHResolucoes.php"><i class="fa fa-angle-double-right"></i> Resoluções</a></li>
                </ul>
            </li> 
            <li>
                <a href="../../View/habitacao/ManutencaoFotosUploads.php"><i class="fa fa-fw fa-upload"></i> Upload Fotos</a>
            </li> 
            
            <?php
                if($_SESSION['nivel']==2){
                    echo'<li>
                           <a href="../../View/habitacao/Manutencao-Usuario.php"><i class="fa fa-fw fa-users"></i> Usuários</a>
                        </li>';
                }
            ?>        
            
        </ul>
    </div>

</nav>