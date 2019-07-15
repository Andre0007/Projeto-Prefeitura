var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerSecretariaBiografia',function($scope, $http, toasty){    
    
    $scope.readOne = function (categoria) {
        $http({
            method: 'POST',
            data: {'categoria': categoria},
            url: '../../Controller/prefeitura/governo-controller/readSec.php'
        }).then(function successCallback(response) {            
            $scope.id = response.data[0]["id"];
            $scope.nome = response.data[0]["nome"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.imagem_perfil = response.data[0]["imagem_perfil"];
        });
    };

    $scope.updateSecretario = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'nome': $scope.nome,
                'descricao': $scope.descricao,
                'imagem_perfil': $scope.imagem_perfil
            },
            url: '../../Controller/prefeitura/governo-controller/updateSec.php'
        }).then(function successCallback(response) {

        });
        toasty.success({
            title: 'Alterado!',
            msg: 'Gestor alterado com sucesso, na lista e no portal Habitação!'
        });
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.nome = "";
        $scope.descricao = "";
        $scope.imagem_perfil = "";
    };

});