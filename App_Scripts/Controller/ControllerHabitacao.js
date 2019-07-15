var app = angular.module('myApp',['ngSanitize','angular-toasty']);
app.controller('ControllerHabitacao',function($scope, $http, toasty){

    //A Secretaria
    $scope.getSecretario = function (categoria) {
        $http({
            method: 'POST',
            data: {'categoria': categoria},
            url: 'Controller/prefeitura-controller/read_governo.php'
        }).then(function successCallback(response) {            
            $scope.nome = response.data[0]["nome"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.imagem_perfil = response.data[0]["imagem_perfil"];           
        });
    };
    
    $scope.getListEquipe = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readEquipe.php'
        }).then(function successCallback(response) {
            $scope.equipeHabitacao = response.data.records;
        });
    };
    
    $scope.readAtribuicoes = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readAtribuicoes.php'
        }).then(function successCallback(response) { 
            $scope.descricaoAtribuicoes = response.data[0]["descricaoAtribuicoes"];
        });
    };
    
    $scope.SendMail = function () {       
        if ($scope.contactForm.$valid) {              
            $http({
                method: 'POST',
                data: {
                    'nome': $scope.nomeCompleto,
                    'email': $scope.email,
                    'telefone': $scope.telefone,
                    'endereco': $scope.endereco,
                    'assunto': $scope.assunto,                               
                    'mensagem': $scope.mensagem
                },
                url: 'Controller/habitacao-controller/FaleMail.php'
            }).then(function successCallback(response) {
                window.setTimeout('location.reload()', 3000);
                toasty.success({
                    title: 'Sucesso!!',
                    msg: 'Mensagem enviada com sucesso, logo entraremos em contato'
                });
            });
        }
    };
    
    //Regularização F.
    $scope.readRegPrograma = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegPrograma.php'
        }).then(function successCallback(response) { 
            $scope.descricaoPrograma = response.data[0]["descricaoPrograma"];
        });
    };
    
    $scope.readRegPriorizacao = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegPriorizacao.php'
        }).then(function successCallback(response) { 
            $scope.descricaoPriorizacao = response.data[0]["descricaoPriorizacao"];
        });
    };
    
    $scope.readRegEtapas = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegEtapas.php'
        }).then(function successCallback(response) { 
            $scope.descricaoEtapas = response.data[0]["descricaoEtapas"];
        });
    };
    
    $scope.readRegAreas = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegAreas.php'
        }).then(function successCallback(response) { 
            $scope.numFase = response.data[0]["numFase"];
            $scope.descricaoArea = response.data[0]["descricaoArea"];
        });
    };
    
    $scope.readRegLegislacao = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegLegislacao.php'
        }).then(function successCallback(response) { 
            $scope.descricaoLegislacao = response.data[0]["descricaoLegislacao"];
        });
    };
    
    $scope.getRegPerguntas = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegPerguntas.php'
        }).then(function successCallback(response) {
            $scope.RegPerguntas = response.data.records;
        });
    };
    
    $scope.getRegNoticias = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readRegNoticias.php'
        }).then(function successCallback(response) {
            $scope.RegNoticias = response.data.records;
        });
    };
    
    //MCMV
    $scope.readMcmvPrograma = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvPrograma.php'
        }).then(function successCallback(response) { 
            $scope.descricaoMcmvPrograma = response.data[0]["descricaoMcmvPrograma"];
        });
    };
    
    $scope.readMcmvCriterios = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvCriterios.php'
        }).then(function successCallback(response) { 
            $scope.descricaoMcmvCriterios = response.data[0]["descricaoMcmvCriterios"];
        });
    };

    $scope.getMcmvPerguntas = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvPerguntas.php'
        }).then(function successCallback(response) {
            $scope.McmvPerguntas = response.data.records;
        });
    };
    
    $scope.getListHierarquizada = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvHierarquizada.php'
        }).then(function successCallback(response) {
            $scope.listaHierarquizada = response.data.records;
        });
    };
    
    $scope.getListComplementar = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvComplementar.php'
        }).then(function successCallback(response) {
            $scope.listaComplementar = response.data.records;
        });
    };
    
    $scope.getListMcmvCronograma = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMCMVCronograma.php'
        }).then(function successCallback(response) {
            $scope.listaMCMVCronograma = response.data.records;
        });
    };
    
    $scope.getMcmvNoticias = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvNoticias.php'
        }).then(function successCallback(response) {
            $scope.McmvNoticias = response.data.records;
        });
    };
    
    $scope.getMcmvLegislacao = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readMcmvLegislacao.php'
        }).then(function successCallback(response) { 
            $scope.descricaoMcmvLegislacao = response.data[0]["descricaoMcmvLegislacao"];
        });
    };
    
    //CMH
    $scope.getListCMHConvocacoes= function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readCMHConvocacoes.php'
        }).then(function successCallback(response) {
            $scope.listaCMHConvocacoes = response.data.records;
        });
    };
    
    $scope.getCMHLegislacao = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readCMHLegislacao.php'
        }).then(function successCallback(response) { 
            $scope.descricaoCMHLegislacao = response.data[0]["descricaoCMHLegislacao"];
        });
    };
    
    $scope.getListCMHReunioes= function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readCMHReunioes.php'
        }).then(function successCallback(response) {
            $scope.listaCMHReunioes = response.data.records;
        });
    };
    
    $scope.getListCMHResolucoes = function () {
        $http({
            method: 'GET',
            url: 'Controller/habitacao-controller/readCMHResolucoes.php'
        }).then(function successCallback(response) {
            $scope.listaCMHResolucoes = response.data.records;
        });
    };
    
    /* Jquerys */
    $(document).ready(function () {
        $("#telefone").mask("(99)9999-9999?9");
    });
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.Top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return true;
    });

});