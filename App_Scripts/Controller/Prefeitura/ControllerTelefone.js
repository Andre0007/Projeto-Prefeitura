var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerTelefone',function($scope, $http, toasty){
           
    $scope.updateTelefone = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'departamento': $scope.departamento,
                'telefone': $scope.telefone
            },
            url: '../../Controller/prefeitura/telefone-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Telefone alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Telefone");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/telefone-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.departamento = response.data[0]["departamento"];
            $scope.telefone = response.data[0]["telefone"];
            
            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/telefone-controller/read.php'
        }).then(function successCallback(response) {
            $scope.telefones = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Adicionar novo telefone");
        $('#btn-update').hide();
        $('#btn-create').show();
    }

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.departamento = "";
        $scope.telefone = "";
    }; 

    $scope.createTelefone = function () {
        $http({
            method: 'POST',
            data: {
                'departamento': $scope.departamento,
                'telefone': $scope.telefone
            },
            url: '../../Controller/prefeitura/telefone-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Telefone cadastrado com sucesso!'
        });
    };

    $scope.deleteTelefone = function (id) {

        if (confirm("Você tem certeza?")) {

            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/telefone-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletadar!',
                msg: 'Telefone deletado com sucesso!'
            });
        };
    };
    
});