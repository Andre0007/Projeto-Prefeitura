var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerMCMVPrograma',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo texto MCMV Programa");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/MCMVPrograma-controller/read.php'
        }).then(function successCallback(response) {
            $scope.MCMVPrograma = response.data.records;
        });
    };
    
    $scope.createMCMVPrograma = function () {
        $http({
            method: 'POST',
            data: {
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/MCMVPrograma-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'MCMV Programa cadastrado com sucesso!'
        });
    };
    
    $scope.updateMCMVPrograma = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/MCMVPrograma-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'MCMV Programa alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar textp MCMV Programa");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/MCMVPrograma-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteMCMVPrograma = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/MCMVPrograma-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'MCMV Programa deletado com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.descricao = "";
    }; 
    
});