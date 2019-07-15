var app = angular.module('myApp', []);
app.controller('ControllerLicitacoes',  function ($scope, $http) { 
    
    $scope.ListCategoriaPainel = function () {
        $http({
            method: 'GET',
            url: 'Controller/Licitacao/arquivo-controller/listCategoria.php'
        }).then(function successCallback(response) {
            $scope.categorias = response.data.records;
        });
    };
    
    $scope.ListArquivo = function () {
        $http({
            method: 'GET',
            url: 'Controller/Licitacao/arquivo-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaArquivo = response.data.records;
        });
    };
    
});