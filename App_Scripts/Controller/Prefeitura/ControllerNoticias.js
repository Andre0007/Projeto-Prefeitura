var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerNoticias',function($scope, $http, toasty){
           
    $scope.updateNoticia = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'titulo': $scope.titulo,
                'subtitulo': $scope.subtitulo,
                'descricao': $scope.descricao,
                'imagem_capa': $scope.imagem_capa
            },
            url: '../../Controller/prefeitura/noticias-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterado!',
            msg: 'Noticia alterada com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Noticia");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/noticias-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.titulo = response.data[0]["titulo"];
            $scope.subtitulo = response.data[0]["subtitulo"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.imagem_capa = response.data[0]["imagem_capa"];
            
            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/noticias-controller/read.php'
        }).then(function successCallback(response) {
            $scope.noticias = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar nova notícia");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.titulo = "";
        $scope.subtitulo = "";
        $scope.descricao = "";
        $scope.imagem_capa = "";
    };

    $scope.createNoticia = function () {
        $http({
            method: 'POST',
            data: {
                'titulo': $scope.titulo,
                'subtitulo': $scope.subtitulo,
                'descricao': $scope.descricao,
                'imagem_capa': $scope.imagem_capa
            },
            url: '../../Controller/prefeitura/noticias-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Noticia cadastrada com sucesso!'
        });
    };

    $scope.deleteNoticia = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/noticias-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Noticia deletada com sucesso!'
            });
        };
    };
    
});