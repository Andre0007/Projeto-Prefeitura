var app = angular.module('myApp', []);
app.controller('ControllerHome',  function ($scope, $http) { 
    
    $scope.readAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/home-controller/read.php'
        }).then(function successCallback(response) {       
            $scope.count_downloads = response.data[0]["count_downloads"];
            $scope.count_cpf = response.data[0]["count_cpf"];
            $scope.count_cnpj = response.data[0]["count_cnpj"];
            $scope.count_ativados_download = response.data[0]["count_ativados_download"];
            $scope.count_desativado_download = response.data[0]["count_desativado_download"];
            $scope.count_ativados_arquivos = response.data[0]["count_ativados_arquivos"];
            $scope.count_desativado_arquivos = response.data[0]["count_desativado_arquivos"];
        });
    };
    
    $scope.ListContadorDownloads = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/home-controller/listContadorDownloads.php'
        }).then(function successCallback(response) {
            $scope.ContadorDownloads = response.data.records;
        });
    };
    
});