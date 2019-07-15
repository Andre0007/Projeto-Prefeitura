var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerRegularizacaoNoticias',function($scope, $http, toasty){
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo Regularização Noticias");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/RegularizacaoNoticias-controller/read.php'
        }).then(function successCallback(response) {
            $scope.RegNoticias = response.data.records;
        });
    };
    
    $scope.createRegularizacaoNoticias = function () {
        $http({
            method: 'POST',
            data: {
                'titulo': $scope.titulo,
                'subtitulo': $scope.subtitulo,
                'descricao': $scope.descricao,
                'imagem_capa': $scope.imagem_capa
            },
            url: '../../Controller/habitacao/RegularizacaoNoticias-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Regularização notícia cadastrado com sucesso!'
        });
    };
    
    $scope.updateRegularizacaoNoticias = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'titulo': $scope.titulo,
                'subtitulo': $scope.subtitulo,
                'descricao': $scope.descricao,
                'imagem_capa': $scope.imagem_capa
            },
            url: '../../Controller/habitacao/RegularizacaoNoticias-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Regularização notícia alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar dados Regularização noticia");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/RegularizacaoNoticias-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.titulo = response.data[0]["titulo"];
            $scope.subtitulo = response.data[0]["subtitulo"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.imagem_capa = response.data[0]["imagem_capa"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteRegularizacaoNoticias = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/RegularizacaoNoticias-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Regularização notícia deletada com sucesso!'
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