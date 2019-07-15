var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerMCMVPerguntasFrequentes',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo MCMV Perguntas Frequentes");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/MCMVPerguntas-controller/read.php'
        }).then(function successCallback(response) {
            $scope.MCMVPerguntas = response.data.records;
        });
    };
    
    $scope.createMCMVPerguntas = function () {
        $http({
            method: 'POST',
            data: {
                'pergunta': $scope.pergunta,
                'resposta': $scope.resposta
            },
            url: '../../Controller/habitacao/MCMVPerguntas-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'MCMVP Perguntas Frequentes cadastrado com sucesso!'
        });
    };
    
    $scope.updateMCMVPerguntas = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'pergunta': $scope.pergunta,
                'resposta': $scope.resposta
            },
            url: '../../Controller/habitacao/MCMVPerguntas-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'MCMV Perguntas Frequentes alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar MCMV Perguntas Frequentes");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/MCMVPerguntas-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.pergunta = response.data[0]["pergunta"];
            $scope.resposta = response.data[0]["resposta"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteMCMVPerguntas = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/MCMVPerguntas-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'MCMV Perguntas Frequentes deletado com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.pergunta = "";
        $scope.resposta = "";
    };
    
});