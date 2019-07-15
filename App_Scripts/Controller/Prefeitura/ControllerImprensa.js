var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']); 
app.controller('ControllerImprensa',function($scope, $http, toasty){
       
    $scope.updateImprensa = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'numero': $scope.numero,
                'url': $scope.url,
                'data_lancamento': $scope.data_lancamento
            },
            url: '../../Controller/prefeitura/imprensa-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterado!',
            msg: 'Imprensa alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Imprensa");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/imprensa-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.numero = response.data[0]["numero"];
            $scope.url = response.data[0]["url"];
            $scope.data_lancamento = response.data[0]["data_lancamento"];

            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/imprensa-controller/read.php'
        }).then(function successCallback(response) {
            $scope.imprensa = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Adicionar nova edição da Imprensa");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.numero = "";
        $scope.url = "";
        $scope.data_lancamento = "";
    };

    $scope.createImprensa = function () {
        $http({
            method: 'POST',
            data: {
                'numero': $scope.numero,
                'url': $scope.url,
                'data_lancamento': $scope.data_lancamento
            },
            url: '../../Controller/prefeitura/imprensa-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Imprensa cadastrado com sucesso!'
        });
    };

    $scope.deleteImprensa = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/imprensa-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Imprensa deletado com sucesso!'
            });
        }
    };
    
    function verificaNumero(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    }

    $(document).ready(function () {
       $("#data_lancamento").mask("99/99/9999");
       $("#numero").keypress(verificaNumero);
    });
    
});