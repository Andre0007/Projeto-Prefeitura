<?php

    if($pagina == "Inicial"){
        $TagTitulo = "Home | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Página principal da Prefeitura Municipal de Mairiporã onde informa todos os links direcionais, últimas notícias, vídeos e editais postados.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Logo_Prefeitura_Mairipora.png";
        $TagUrl = "";
    }else if($pagina == "Imprensa"){
        $TagTitulo = "Imprensa Oficial | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Área do site da Prefeitura de Mairiporã com todas versões digitais do jornal.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/assessoria-de-imprensa.jpg";
        $TagUrl = "imprensa-oficial";
    }else if($pagina == "FaleConosco"){
        $TagTitulo = "Fale Conosco | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Fale Conosco da Prefeitura de Mairiporã com todos contatos dos departamentos.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/FaleConoscoPage.jpg";
        $TagUrl = "fale-conosco";
    }else if($pagina == "Calendario"){
        $TagTitulo = "Calendário de Eventos | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Novo calendário de eventos da Prefeitura, aqui você encontra os eventos que ocorrerão divulgados pela Prefeitura.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/calendario-eventos.jpg";
        $TagUrl = "calendario-de-eventos-mairipora";
    }else if($pagina == "ListaConcursoEstagio"){
        $TagTitulo = "Lista de resultados para Estagiários | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista de resultados para Estagiários divulgado pela Prefeitura.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Estagio.jpg";
        $TagUrl = "lista-concursos-estagiario-mairipora";
    }else if($pagina == "ListaConcursoEditais"){
        $TagTitulo = "Lista de Editais | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista de resultados do concurso público divulgado pela Prefeitura.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/ConcursoPublico.jpg";
        $TagUrl = "lista-concursos-editais-mairipora";
    }else if($pagina == "HabitacaoDescricoes"){
        $TagTitulo = "Secretaria de Habitação | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Novo portal informativo da secretaria de habitação, aqui você encontra sobre Regularização Fundiaria, Projeto MCMV, Conselho municipal de habitação.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/HabitacaoPage.jpg";
        $TagUrl = "secretaria-de-habitacao";
    }else if($pagina == "Noticia"){       
        require './Model/class-conexao.php';
        require './Model/prefeitura/noticias-model.php';
        
        $database = new conexaoBD();
        $db = $database->getConnection();

        $noticia = new Noticias($db);

        $noticia->id = $_GET['id'];

        $noticia->readOne();

        $TagTitulo = $noticia->titulo;
        $titulo = $TagTitulo;
        if($noticia->subtitulo != ""){
            $TagDescricao = $noticia->subtitulo;
        }else{
            $TagDescricao = htmlspecialchars(strip_tags($noticia->descricao));
        }
        $TagImagemCapa = $noticia->imagem_capa;
        $TagUrl = "Noticia.php?id=$noticia->id";
    }if($pagina == "404"){
        $TagTitulo = "404 | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Está página não existe ou mudou a URL de direcionamento.";
        $TagImagemCapa = "";
        $TagUrl = "";
    }else if($pagina == "Governo"){
        $TagTitulo = "Perfil | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Perfil da Figura Pública que administra na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Logo_Prefeitura_Mairipora.png";
        $TagUrl = "";
    }else if($pagina == "Secretarias"){
        $TagTitulo = "Lista de Secretarias | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista dos Perfis das Figuras Públicas que administra na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Lista-de-secretarios.jpg";
        $TagUrl = "lista-secretarias";
    }else if($pagina == "Servicos"){
        $TagTitulo = "Menu de Serviços | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Menu de Serviços na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/nossos-servicos.gif";
        $TagUrl = "menu-de-servicos";
    }else if($pagina == "Atendimento"){
        $TagTitulo = "Horário de Atendimento | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Horário de Atendimento na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/banner_horario.jpg";
        $TagUrl = "horario-atendimento";
    }else if($pagina == "Legislacao"){
        $TagTitulo = "Legislações | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Legislações na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/legislacao-mairipora.jpg";
        $TagUrl = "legislacoes";
    }else if($pagina == "Licitacao"){
        $TagTitulo = "Menu de Licitação | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Menu de Licitação na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/licitacao-mairipora.jpg";
        $TagUrl = "documentos-licitacao";
    }else if($pagina == "Licitacoes" || $pagina == "BaixarLicitacoes"){
        $TagTitulo = "Painel de Licitação | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Painel de Licitação na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/licitacao-mairipora.jpg";
        $TagUrl = "painel-de-licitacoes";
    }else if($pagina == "Ouvidoria"){
        $TagTitulo = "Ouvidoria | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Ouvidoria na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Logo_Prefeitura_Mairipora.png";
        $TagUrl = "ouvidoria";
    }else if($pagina == "SecretariaAmbiente"){
        $TagTitulo = "Secretaria do Meio Ambiente | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista de Publicações da Secretaria do Meio Ambiente na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/sec-meio-ambiente.jpg";
        $TagUrl = "secretaria-do-meio-ambiente";
    }else if($pagina == "CadFornecedores"){
        $TagTitulo = "Documentos cadastro de Fornecedores | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Documentos cadastro de Fornecedores na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/sec-meio-ambiente.jpg";
        $TagUrl = "cadastro-de-fornecedores";
    }else if($pagina == "ConcursoPublico"){
        $TagTitulo = "Documentos para o Concurso Público | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Documentos para o Concurso Público na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/ConcursoPublico.jpg";
        $TagUrl = "concursos";
    }else if($pagina == "Email"){
        $TagTitulo = "Lista para contato | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista para contato na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/email-e-telefone.jpg";
        $TagUrl = "lista-emails";
    }else if($pagina == "Telefone"){
        $TagTitulo = "Lista para contato | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista para contato na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/email-e-telefone.jpg";
        $TagUrl = "telefones-para-contato";
    }else if($pagina == "RepasseFederal"){
        $TagTitulo = "Lista Repasse dos Recursos Federais | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista Repasse dos Recursos Federais na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/repasse-federal.jpg";
        $TagUrl = "tabelas-repasse-recursos-federais";
    }else if($pagina == "ListaNoticias"){
        $TagTitulo = "Lista Notícias do Governo | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Lista Notícias do Governo na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Logo_Prefeitura_Mairipora.png";
        $TagUrl = "lista-noticias";
    }else if($pagina == "AudienciaPublica"){
        $TagTitulo = "Audiência Pública | Prefeitura Municipal de Mairiporã";
        $TagDescricao = "Documentos de Audiência Pública na Prefeitura de Mairiporã.";
        $TagImagemCapa = "http://www.mairipora.sp.gov.br/App_Imagens/ImgSeo/Logo_Prefeitura_Mairipora.png";
        $TagUrl = "audiencia-publica";
    }
  
?>