var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerRegularizacaoPrograma',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo Programa");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/RegularizacaoPrograma-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ReguPrograma = response.data.records;
        });
    };
    
    $scope.createRegularizacaoPrograma = function () {
        $http({
            method: 'POST',
            data: {
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoPrograma-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Regularização programa cadastrada com sucesso!'
        });
    };
    
    $scope.updateRegularizacaoPrograma = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoPrograma-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Regularização programa alterada com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Programa");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/RegularizacaoPrograma-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteRegularizacaoPrograma = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/RegularizacaoPrograma-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Regularização programa deletada com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.descricao = "";
    };
    
});