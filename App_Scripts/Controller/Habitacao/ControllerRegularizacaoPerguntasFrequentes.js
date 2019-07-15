var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerRegularizacaoPerguntas',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo Regularização Perguntas Frequentes");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/RegularizacaoPerguntas-controller/read.php'
        }).then(function successCallback(response) {
            $scope.RegPerguntas = response.data.records;
        });
    };
    
    $scope.createRegPerguntas = function () {
        $http({
            method: 'POST',
            data: {
                'pergunta': $scope.pergunta,
                'resposta': $scope.resposta
            },
            url: '../../Controller/habitacao/RegularizacaoPerguntas-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Regularização Perguntas Frequentes cadastrado com sucesso!'
        });
    };
    
    $scope.updateRegPerguntas = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'pergunta': $scope.pergunta,
                'resposta': $scope.resposta
            },
            url: '../../Controller/habitacao/RegularizacaoPerguntas-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Regularização Perguntas Frequentes alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Regularização Perguntas Frequentes");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/RegularizacaoPerguntas-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.pergunta = response.data[0]["pergunta"];
            $scope.resposta = response.data[0]["resposta"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteRegPerguntas = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/RegularizacaoPerguntas-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Regularização Perguntas Frequentes deletado com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.pergunta = "";
        $scope.resposta = "";
    };
    
});