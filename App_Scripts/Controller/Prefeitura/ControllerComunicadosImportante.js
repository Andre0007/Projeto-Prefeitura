var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerComunicadosImportante',function($scope, $http, toasty){
           
    $scope.updateComunicadosImportante = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'titulo': $scope.titulo,
                'descricao': $scope.descricao
            },
            url: '../../Controller/prefeitura/comunicado-importante-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Comunicado alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Comunicado Importante");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/comunicado-importante-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.titulo = response.data[0]["titulo"];
            $scope.descricao = response.data[0]["descricao"];
            
            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/comunicado-importante-controller/read.php'
        }).then(function successCallback(response) {
            $scope.comunicados = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar nova Comunicado Importante");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.titulo = "";
        $scope.descricao = "";
    };

    $scope.createComunicadosImportante = function () {
        $http({
            method: 'POST',
            data: {
                'titulo': $scope.titulo,
                'descricao': $scope.descricao
            },
            url: '../../Controller/prefeitura/comunicado-importante-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Comunicado criado com sucesso!'
        });
    };

    $scope.deleteComunicadosImportante = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/comunicado-importante-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
        };
        toasty.success({
            title: 'Deletar!',
            msg: 'Comunicado deletado com sucesso!'
        });
    };
    
});