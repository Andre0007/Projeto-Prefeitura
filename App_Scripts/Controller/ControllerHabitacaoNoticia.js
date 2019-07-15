var app = angular.module('myApp',['ngSanitize']);
app.controller('ControllerHabitacao',function($scope, $http){
    
    $scope.readRegularizacaoArtigo = function (id) {
        $http({
            method: 'POST',
            data: {'id': id},
            url: 'Controller/habitacao-controller/read_regularizacao_one_artigo.php'
        }).then(function successCallback(response) {                   
            $scope.titulo = response.data[0]["titulo"];
            $scope.subtitulo = response.data[0]["subtitulo"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.data_postagem = response.data[0]["data_postagem"];
            $scope.imagem_capa = response.data[0]["imagem_capa"];
        });
    };
    
    $scope.readMcmvArtigo = function (id) {
        $http({
            method: 'POST',
            data: {'id': id},
            url: 'Controller/habitacao-controller/read_mcmv_one_artigo.php'
        }).then(function successCallback(response) {                   
            $scope.titulo = response.data[0]["titulo"];
            $scope.subtitulo = response.data[0]["subtitulo"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.data_postagem = response.data[0]["data_postagem"];
            $scope.imagem_capa = response.data[0]["imagem_capa"];
        });
    };
    
});