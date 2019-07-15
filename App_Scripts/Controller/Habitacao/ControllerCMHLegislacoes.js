var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerCMHLegislacoes',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo texto CMH Legislação");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/CMHLegislacoes-controller/read.php'
        }).then(function successCallback(response) {
            $scope.CMHLegislacao = response.data.records;
        });
    };
    
    $scope.createCMHLegislacao = function () {
        $http({
            method: 'POST',
            data: {
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/CMHLegislacoes-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'CMH Legislação cadastrado com sucesso!'
        });
    };
    
    $scope.updateCMHLegislacao = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/CMHLegislacoes-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'CMH Legislação alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar texto CMH Legislação");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/CMHLegislacoes-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteCMHLegislacao = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/CMHLegislacoes-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'CMH Legislação deletado com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.descricao = "";
    };
    
});