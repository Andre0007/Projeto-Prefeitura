var app = angular.module('myApp', []);
app.controller('ControllerDownloads',  function ($scope, $http) { 

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/download-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaDownloads = response.data.records;
        });
    };

    $scope.createLogDownload = function (id_arquivo) {
        $http({
            method: 'POST',
            data: {               
                'nome': $scope.nome,
                'cpf_cnpj': $scope.cpfcnpj,
                'email': $scope.email,               
                'telefone': $scope.telefone,
                'id_arquivo': id_arquivo
            },
            url: '../../Controller/Licitacao/download-controller/create.php'
        }).then(function successCallback(response) {
            $scope.clearForm();
            alert('Download iniciado');
        });
    };
    
    $scope.clearForm = function () {
        $scope.nome = "";
        $scope.cpfcnpj = "";
        $scope.email = "";
        $scope.telefone = "";
        $scope.telefone = "";
    };
    
});