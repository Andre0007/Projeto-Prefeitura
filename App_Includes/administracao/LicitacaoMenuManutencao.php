<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../View/licitacao/Dashboard.php">
                <img src="../../App_Imagens/Logo_Prefeitura-menor-fundo-branco-licitacao.png" class="img-thumbnail" alt="logo Prefeitura de Mairiporã">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse">            
            <ul class="nav navbar-nav">
                <li class="<?php if($pagina == 'ManutencaoUploads') echo'active' ?>"><a href="../../View/licitacao/Manutencao-Uploads.php">Uploads</a></li>
                <li class="<?php if($pagina == 'ManutencaoArquivos') echo'active' ?>"><a href="../../View/licitacao/Manutencao-Arquivos.php">Arquivos</a></li>
                <li class="<?php if($pagina == 'ListaCategoria') echo'active' ?>"><a href="../../View/licitacao/Manutencao-Categoria.php">Categorias</a></li>
                <li class="<?php if($pagina == 'ListaDownload') echo'active' ?>"><a href="../../View/licitacao/lista_downloads.php">Lista de Downloads</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if($pagina == 'ManutencaoUsuarios') echo'active' ?>"><a href="../../View/licitacao/Manutencao-Usuarios.php">Usuários</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Editar Perfil</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-cog"></i> Mudar Senha</a></li>
                        <li class="divider"></li>
                        <li><a href="../../Controller/login-controller/logoutLicitacao-controller.php"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
                    </ul>
                </li>
            </ul>           
        </div><!-- /.navbar-collapse -->
        
    </div>
</nav>