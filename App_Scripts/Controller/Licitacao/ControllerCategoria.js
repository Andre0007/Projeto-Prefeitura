var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerCategoria',function($scope, $http, toasty){
           
    $scope.updateCategoria = function () {
        $http({
            method: 'POST',
            data: {
                'id_categoria': $scope.id_categoria,
                'descricao': $scope.descricao
            },
            url: '../../Controller/Licitacao/categoria-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Categoria alterada com sucesso!'
        });
    };

    $scope.readOne = function (id_categoria) {

        $('#modal-title').text("Alterar categoria");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id_categoria': id_categoria},
            url: '../../Controller/Licitacao/categoria-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id_categoria = response.data[0]["id_categoria"];
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/categoria-controller/read.php'
        }).then(function successCallback(response) {
            $scope.categorias = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar nova categoria");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id_categoria = "";
        $scope.descricao = "";
    }; 

    $scope.createCategoria = function () {
        $http({
            method: 'POST',
            data: {
                'descricao': $scope.descricao
            },
            url: '../../Controller/Licitacao/categoria-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Categoria cadastrada com sucesso!'
        });
    };

    $scope.deleteCategoria = function (id_categoria) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id_categoria': id_categoria},
                url: '../../Controller/Licitacao/categoria-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Categoria deletada com sucesso!'
            });
        };
    };
    
});