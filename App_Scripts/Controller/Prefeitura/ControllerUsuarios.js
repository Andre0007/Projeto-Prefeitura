var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerUsuarios',function($scope, $http, toasty){
           
    $scope.updateUsuario = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'nome': $scope.nome,
                'email': $scope.email,
                'usuario': $scope.usuario,
                'senha': $scope.senha
            },
            url: '../../Controller/prefeitura/usuario-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Usuario alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar usuário");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/usuario-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.nome = response.data[0]["nome"];
            $scope.email = response.data[0]["email"];
            $scope.usuario = response.data[0]["usuario"];

            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/usuario-controller/read.php'
        }).then(function successCallback(response) {
            $scope.usuarios = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo usuário");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.nome = "";
        $scope.email = "";
        $scope.usuario = "";
        $scope.senha = "";
    };

    $scope.createUsuario = function () {
        $http({
            method: 'POST',
            data: {
                'nome': $scope.nome,
                'email': $scope.email,
                'usuario': $scope.usuario,
                'senha': $scope.senha
            },
            url: '../../Controller/prefeitura/usuario-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Usuario cadastrado com sucesso!'
        });
    };

    $scope.deleteUsuario = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/usuario-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Usuario deletado com sucesso!'
            });
        }
    };
    
});