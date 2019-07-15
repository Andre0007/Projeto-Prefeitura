var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerSecretariaEquipeHabitacao',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo integrante");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/SecretariaEquipeHabitacao-controller/read.php'
        }).then(function successCallback(response) {
            $scope.equipe = response.data.records;
        });
    };
    
    $scope.createEquipe = function () {
        $http({
            method: 'POST',
            data: {
                'nome': $scope.nome,
                'descricao': $scope.descricao,
                'url': $scope.url
            },
            url: '../../Controller/habitacao/SecretariaEquipeHabitacao-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Integrante cadastrado com sucesso!'
        });
    };
    
    $scope.updateEquipe = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'nome': $scope.nome,
                'descricao': $scope.descricao,
                'url': $scope.url
            },
            url: '../../Controller/habitacao/SecretariaEquipeHabitacao-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Integrante alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar dados Integrante");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/SecretariaEquipeHabitacao-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.nome = response.data[0]["nome"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.url = response.data[0]["url"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteEquipe = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/SecretariaEquipeHabitacao-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Integrante deletado com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.nome = "";
        $scope.descricao = "";
        $scope.url = "";
    };
    
});