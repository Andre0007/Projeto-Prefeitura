var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerEmail',function($scope, $http, toasty){
           
    $scope.updateEmail = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'email': $scope.email
            },
            url: '../../Controller/prefeitura/email-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'E-mail carregado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar E-mail");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/email-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.email = response.data[0]["email"];
            
            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/email-controller/read.php'
        }).then(function successCallback(response) {
            $scope.emails = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Adicionar novo E-mail");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.email = "";
    };

    $scope.createEmail = function () {
        $http({
            method: 'POST',
            data: {
                'email': $scope.email
            },
            url: '../../Controller/prefeitura/email-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'E-mail cadastrado com sucesso!'
        });
    };

    $scope.deleteEmail = function (id) {

        if (confirm("Você tem certeza?")) {

            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/email-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'E-mail deletado com sucesso!'
            });
        }
    };
    
});