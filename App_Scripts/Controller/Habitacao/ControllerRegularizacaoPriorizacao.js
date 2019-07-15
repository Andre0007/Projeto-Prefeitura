var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerRegularizacaoPriorizacao',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar nova Priorização");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/RegularizacaoPriorizacao-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ReguPriorizacao = response.data.records;
        });
    };
    
    $scope.createRegularizacaoPriorizacao = function () {
        $http({
            method: 'POST',
            data: {
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoPriorizacao-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Regularização Priorização cadastrada com sucesso!'
        });
    };
    
    $scope.updateRegularizacaoPriorizacao = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoPriorizacao-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Regularização Priorização alterada com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Priorização");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/RegularizacaoPriorizacao-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteRegularizacaoPriorizacao = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/RegularizacaoPriorizacao-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Regularização Priorização deletada com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.descricao = "";
    };
    
});