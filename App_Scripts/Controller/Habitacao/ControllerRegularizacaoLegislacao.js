var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerRegularizacaoLegislacao',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar nova Legislação");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/RegularizacaoLegislacao-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ReguLegislacao = response.data.records;
        });
    };
    
    $scope.createRegularizacaoLegislacao = function () {
        $http({
            method: 'POST',
            data: {
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoLegislacao-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Regularização Legislação cadastrada com sucesso!'
        });
    };
    
    $scope.updateRegularizacaoLegislacao = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoLegislacao-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Regularização Legislação alterada com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Legislação");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/RegularizacaoLegislacao-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteRegularizacaoLegislacao = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/RegularizacaoLegislacao-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Regularização Legislação deletada com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.descricao = "";
    };
    
});