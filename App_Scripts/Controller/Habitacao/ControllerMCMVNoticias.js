var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerMCMVNoticias',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo MCMV Noticias");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/MCMVNoticias-controller/read.php'
        }).then(function successCallback(response) {
            $scope.MCMVNoticias = response.data.records;
        });
    };
    
    $scope.createMCMVNoticias = function () {
        $http({
            method: 'POST',
            data: {
                'titulo': $scope.titulo,
                'subtitulo': $scope.subtitulo,
                'descricao': $scope.descricao,
                'imagem_capa': $scope.imagem_capa
            },
            url: '../../Controller/habitacao/MCMVNoticias-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'MCMV notícia cadastrado com sucesso!'
        });
    };
    
    $scope.updateMCMVNoticias = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'titulo': $scope.titulo,
                'subtitulo': $scope.subtitulo,
                'descricao': $scope.descricao,
                'imagem_capa': $scope.imagem_capa
            },
            url: '../../Controller/habitacao/MCMVNoticias-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'MCMV notícia alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar dados MCMV noticia");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/MCMVNoticias-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.titulo = response.data[0]["titulo"];
            $scope.subtitulo = response.data[0]["subtitulo"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.imagem_capa = response.data[0]["imagem_capa"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteMCMVNoticias = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/MCMVNoticias-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'MCMV notícia deletada com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.titulo = "";
        $scope.subtitulo = "",
        $scope.descricao = "";
        $scope.imagem_capa = "";
    };
    
});