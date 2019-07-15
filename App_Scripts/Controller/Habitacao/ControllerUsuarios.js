var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerUsuarios',function($scope, $http, toasty){
     
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo usuário");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/usuario-controller/read.php'
        }).then(function successCallback(response) {
            $scope.usuarios = response.data.records;
        });
    };
    
    $scope.createUsuario = function () {
        $http({
            method: 'POST',
            data: {
                'nome': $scope.nome,
                'email': $scope.email,
                'nivel': $scope.nivel,
                'senha': $scope.senha
            },
            url: '../../Controller/habitacao/usuario-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Usuário cadastrado com sucesso!'
        });
    };
    
    $scope.updateUsuario = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'nome': $scope.nome,
                'email': $scope.email,
                'nivel': $scope.nivel,
                'senha': $scope.senha
            },
            url: '../../Controller/habitacao/usuario-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Usuário alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar usuário");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/usuario-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.nome = response.data[0]["nome"];
            $scope.email = response.data[0]["email"];
            $scope.nivel = response.data[0]["nivel"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteUsuario = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/usuario-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Usuário deletado com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.nome = "";
        $scope.email = "";
        $scope.nivel = "";
        $scope.senha = "";
    };
    
});