app.controller('ControllerPrefeitura',function($scope, $http, $sce){
       
     new WOW().init();  
    
    $scope.carColors = ["2017","2016","2015","2014","2013","2012","2011","2010","2009","2008","2007","2006"];    
    
    $scope.filter = 2017;       

    $scope.getListAudienciaPublica = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_audiencia_publica.php'
        }).then(function successCallback(response) {
            $scope.listaAudienciaPublica = response.data.records;
        });
    };

    $scope.getListRepasseFederal = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_repasse_federal.php'
        }).then(function successCallback(response) {
            $scope.listaRepasseFederal = response.data.records;
        });
    };
    
    $scope.trustAsHtml = $sce.trustAsHtml;
    $scope.getListFourComunicadosImportante = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_comunicados_importante_four.php'
        }).then(function successCallback(response) {
            $scope.listaComunicados = response.data.records;
        });
    }; 
    
    $scope.getListFourEventos = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_eventos_four.php'
        }).then(function successCallback(response) {
            $scope.listaEventos = response.data.records;
        });
    };
    
    $scope.getListFourConcursoEdital = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_concurso_edital_four.php'
        }).then(function successCallback(response) {
            $scope.listaConcursoEdital = response.data.records;
        });
    };
    
    $scope.getListConcursoEdital = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_concurso_edital_all.php'
        }).then(function successCallback(response) {
            $scope.listaConcursoEdital = response.data.records;
        });
    };
    
    $scope.getListFourConcursoEstagio = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_concurso_four.php'
        }).then(function successCallback(response) {
            $scope.listaConcursoEstagio = response.data.records;
        });
    };
    
    $scope.getListConcursoEstagio = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_concurso_all.php'
        }).then(function successCallback(response) {
            $scope.listaConcursoEstagio = response.data.records;
        });
    };
    
    $scope.getListGoverno = function (categoria) {
        $http({
            method: 'POST',
            data: {'categoria': categoria},
            url: 'Controller/prefeitura-controller/read_governo.php'
        }).then(function successCallback(response) {            
            $scope.nome = response.data[0]["nome"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.imagem_perfil = response.data[0]["imagem_perfil"];                  
            $scope.telefone_secretaria = response.data[0]["telefone_secretaria"];  
            $scope.endereco_secretaria = response.data[0]["endereco_secretaria"];  
        });
    };
    
    $scope.getListImprensa = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura/imprensa-controller/read.php'
        }).then(function successCallback(response) {
            $scope.jornais = response.data.records;
        });
    };
    
    $scope.getListTelefone = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura/telefone-controller/read.php'
        }).then(function successCallback(response) {
            $scope.telefones = response.data.records;
        });
    };
    
    $scope.getListEmails = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura/email-controller/read.php'
        }).then(function successCallback(response) {
            $scope.emails = response.data.records;
        });
    };
    
    $scope.readArtigo = function (id) {
        $http({
            method: 'POST',
            data: {'id': id},
            url: 'Controller/prefeitura-controller/read_one_artigo.php'
        }).then(function successCallback(response) {       
            $scope.id = response.data[0]["id"];
            $scope.imagem_capa = response.data[0]["imagem_capa"];
            $scope.titulo = response.data[0]["titulo"];
            $scope.subtitulo = response.data[0]["subtitulo"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.data_postagem = response.data[0]["data_postagem"];
        });
    };
    
    $scope.getPostAntigos = function (id) {
        $http({
            method: 'POST',
            data: {'id': id},
            url: 'Controller/prefeitura-controller/read_post_two_old.php'
        }).then(function successCallback(response) {
            $scope.postAntigos = response.data.records;
        });
    };
    
    $scope.getListaCreche = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura/lista-creche-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ListaCreche = response.data.records;
        });
    };
    
    $scope.getListNoticias = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_list_noticias.php'
        }).then(function successCallback(response) {
            $scope.noticiasList = response.data.records;
        });
    };
    
    $scope.getNewThree = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_three.php'
        }).then(function successCallback(response) {
            $scope.noticiasThree = response.data.records;
        });
    };
    
    $scope.getOldFour = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_four.php'           
        }).then(function successCallback(response) {                    
            $scope.noticiasFour = response.data.records;
        });
    };
    
    $scope.getUltimasNoticias = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_ultimas.php'           
        }).then(function successCallback(response) {                    
            $scope.ultimasNoticias = response.data.records;
        });
    };
    
    $scope.getListSecretariaAmbiente = function () {
        $http({
            method: 'GET',
            url: 'Controller/prefeitura-controller/read_meio_ambiente.php'           
        }).then(function successCallback(response) {                    
            $scope.secretariaAmbiente = response.data.records;
        });
    };
    
    $http.get("App_Scripts/Json/Legislacoes.json")
        .then(function(arr){
        $scope.legislacoes = arr.data;
    });
    
});